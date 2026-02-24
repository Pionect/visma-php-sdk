<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use cebe\openapi\spec\Reference;
use cebe\openapi\spec\Schema;
use Crescat\SaloonSdkGenerator\Generators\DtoGenerator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Illuminate\Support\Str;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpNamespace;
use Pionect\VismaSdk\Foundation\Factories\HasTestFactory;
use Spatie\LaravelData\Attributes\WithTransformer;

class VismaDtoGenerator extends DtoGenerator
{
    protected ?string $factoryTraitClass = HasTestFactory::class;

    /**
     * Determine if a schema should be included in generation.
     * Skip wrapper classes that only have a single 'value' property.
     */
    protected function shouldIncludeSchema(string $className, Schema $schema): bool
    {
        $properties = $schema->properties ?? [];

        // Remove metadata property for consistency with extractProperties
        unset($properties['metadata']);

        // Skip schemas that only contain a 'value' property (wrapper objects)
        return ! (count($properties) === 1 && isset($schema->properties['value']));
    }

    /**
     * Extract properties directly from schema (no JSON:API attributes wrapper).
     *
     * @return Schema[]
     */
    protected function extractProperties(Schema $schema): array
    {
        $properties = $schema->properties ?? [];

        // Remove metadata property
        unset($properties['metadata']);

        return $properties;
    }

    /**
     * Check if property references a wrapper object (single 'value' property) and unwrap it.
     */
    protected function unwrappedSpecType(Schema|Reference $propertySpec): Schema|Reference|null
    {
        if ($propertySpec instanceof Reference) {
            $referenceName = Str::afterLast($propertySpec->getReference(), '/');
            $wrapperSchema = $this->specification->components->schemas[$referenceName] ?? null;

            if (! $wrapperSchema) {
                return null;
            }

            $properties = $wrapperSchema->properties ?? [];

            // Remove metadata property for consistency with extractProperties
            unset($properties['metadata']);

            // Check if schema only has a single 'value' property (wrapper object)
            if (count($properties) === 1 && isset($wrapperSchema->properties['value'])) {
                return $wrapperSchema->properties['value'];
            }
        }

        return null;
    }

    /**
     * Add property to class, applying ValueWrapperTransformer for DtoValueOf properties.
     *
     * @return bool Whether a name mapping was generated.
     */
    protected function addPropertyToClass(
        ClassType $classType,
        PhpNamespace $namespace,
        string $propertyName,
        Schema|Reference $propertySpec,
        string $type,
        Method $classConstructor,
    ): bool {
        // Check if this property references a DtoValueOf wrapper and unwrap it
        $unwrappedSpec = $this->unwrappedSpecType($propertySpec);

        // If unwrapped, recalculate the type from the unwrapped spec
        if ($unwrappedSpec) {
            $type = $this->convertOpenApiTypeToPhp($unwrappedSpec);

            // If the unwrapped spec is a Reference, use FQN
            if ($unwrappedSpec instanceof Reference) {
                $dtoClassName = NameHelper::dtoClassName($type);
                $type = $this->buildDtoFqn($dtoClassName);
            }
        }

        // Call parent to create the promoted parameter
        // Parent now handles enum detection via detectEnum() hook
        $mappingGenerated = parent::addPropertyToClass(
            $classType,
            $namespace,
            $propertyName,
            $unwrappedSpec ?? $propertySpec,
            $type,
            $classConstructor
        );

        // Add property description from OpenAPI spec
        $specToCheck = $unwrappedSpec ?? $propertySpec;
        if ($specToCheck instanceof Schema && $specToCheck->description) {
            $safeName = NameHelper::safeVariableName($propertyName);
            $parameter = $classConstructor->getParameter($safeName);
            $cleanDescription = $this->cleanDescription($specToCheck->description);
            $parameter->addComment($cleanDescription);
        }

        // Add ValueWrapperTransformer attribute if property was unwrapped
        if ($unwrappedSpec) {
            $safeName = NameHelper::safeVariableName($propertyName);
            $parameter = $classConstructor->getParameter($safeName);

            // Add WithTransformer attribute
            $transformerClass = $this->config->namespace.'\\Foundation\\DataTransferObjects\\ValueWrapperTransformer';
            $parameter->addAttribute(WithTransformer::class, [
                new Literal('ValueWrapperTransformer::class'),
            ]);

            $namespace->addUse($transformerClass, 'ValueWrapperTransformer');
            $namespace->addUse(WithTransformer::class);
        }

        return $mappingGenerated;
    }

    /**
     * Override to detect enums in unwrapped specs.
     */
    protected function detectEnum(Schema|Reference $propertySpec, string $dtoClassName, string $propertyName): ?array
    {
        // Check unwrapped spec first (for DtoValueOf wrappers)
        $unwrappedSpec = $this->unwrappedSpecType($propertySpec);
        $specToCheck = $unwrappedSpec ?? $propertySpec;

        // Use parent's enum detection logic
        return parent::detectEnum($specToCheck, $dtoClassName, $propertyName);
    }

    /**
     * Clean OpenAPI description for PHP docblocks.
     */
    protected function cleanDescription(string $description): string
    {
        // Decode HTML entities
        $clean = html_entity_decode($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // Remove breadcrumb navigation patterns (e.g., "The table > Field >")
        $clean = preg_replace('/^(The\s+\w+\s*>\s*)+/', '', $clean);

        // Wrap long lines for readability (80 chars)
        $wrapped = wordwrap($clean, 77, "\n");

        return $wrapped;
    }
}
