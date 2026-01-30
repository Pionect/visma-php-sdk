<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use cebe\openapi\spec\Reference;
use cebe\openapi\spec\Schema;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Illuminate\Support\Str;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Timatic\JsonApiSdk\Generators\JsonApiDtoGenerator;

class PlainJsonDtoGenerator extends JsonApiDtoGenerator
{
    /**
     * Generate DTO classes, skipping DtoValueOf wrapper classes.
     */
    public function generate(ApiSpecification $specification): PhpFile|array
    {
        $this->specification = $specification;

        if ($specification->components) {
            foreach ($specification->components->schemas as $className => $schema) {
                // Skip DtoValueOf wrapper classes entirely
                if (str_starts_with($className, 'DtoValueOf')) {
                    continue;
                }

                $this->generateModelClass(NameHelper::safeClassName($className), $schema);
            }
        }

        return $this->generated;
    }

    public function unwrappedSpecType(Schema|Reference $propertySpec): mixed
    {
        if ($propertySpec instanceof Reference) {
            $referenceName = Str::afterLast($propertySpec->getReference(), '/');

            if (str_starts_with($referenceName, 'DtoValueOf')) {
                $propertySpec = $this->specification->components->schemas[$referenceName];

                // Now wrapperSchema should be a Schema with properties
                if (isset($propertySpec->properties['value'])) {
                    return $propertySpec->properties['value'];
                }
            }
        }

        return null;
    }

    /**
     * Add property to class, applying ValueWrapperTransformer for DtoValueOf properties.
     */
    protected function addPropertyToClass(
        ClassType $classType,
        $namespace,
        string $propertyName,
        Schema|Reference $propertySpec
    ): void {
        // Check if this property references a DtoValueOf wrapper and unwrap it
        $unwrappedSpec = $this->unwrappedSpecType($propertySpec);

        // Call parent with unwrapped type
        // Parent will handle: #[Property], #[DateTime] (if needed), type hints
        parent::addPropertyToClass($classType, $namespace, $propertyName, $unwrappedSpec ?? $propertySpec);

        // Add ValueWrapperTransformer attribute if needed
        // This works alongside #[Property] and #[DateTime] - properties can have multiple attributes
        if ($unwrappedSpec) {
            // Use NameHelper to get the safe variable name (parent might have transformed it)
            $safeName = NameHelper::safeVariableName($propertyName);
            $property = $classType->getProperty($safeName);

            $transformerClass = $this->foundationClass('DataTransferObjects\\ValueWrapperTransformer');
            $withTransformerClass = 'Spatie\\LaravelData\\Attributes\\WithTransformer';

            $property->addAttribute($withTransformerClass, [
                new Literal('ValueWrapperTransformer::class'),
            ]);

            $namespace->addUse($transformerClass);
            $namespace->addUse($withTransformerClass);
        }
    }

    /**
     * Override to NOT skip 'type' field for plain JSON APIs.
     * For plain JSON, 'type' is often a domain property (e.g., account type),
     * not a JSON:API resource type identifier.
     * Also allow 'id' generation since not all DTOs have an id property.
     */
    protected function getPropertiesToSkip(): array
    {
        return []; // Don't skip any properties
    }

    /**
     * Extract properties directly from schema (no JSON:API attributes wrapper).
     *
     * @return Schema[]
     */
    protected function extractJsonApiProperties(Schema $schema): array
    {
        // For plain JSON, properties are directly on the schema
        $properties = $schema->properties ?? [];

        unset($properties['metadata']);

        return $properties;
    }

    /**
     * Skip relationships entirely for plain JSON API.
     */
    protected function addRelationshipProperties(ClassType $classType, $namespace, Schema $schema): void
    {
        // No-op: plain JSON APIs don't have JSON:API style relationships
    }
}
