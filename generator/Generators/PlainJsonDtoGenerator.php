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
use Spatie\LaravelData\Attributes\WithTransformer;

class PlainJsonDtoGenerator extends DtoGenerator
{
    /**
     * Determine if a schema should be included in generation.
     * Skip DtoValueOf wrapper classes entirely.
     */
    protected function shouldIncludeSchema(string $className, Schema $schema): bool
    {
        return ! str_starts_with($className, 'DtoValueOf');
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
     * Check if property references a DtoValueOf wrapper and unwrap it.
     */
    protected function unwrappedSpecType(Schema|Reference $propertySpec): Schema|Reference|null
    {
        if ($propertySpec instanceof Reference) {
            $referenceName = Str::afterLast($propertySpec->getReference(), '/');

            if (str_starts_with($referenceName, 'DtoValueOf')) {
                $wrapperSchema = $this->specification->components->schemas[$referenceName];

                // Now wrapperSchema should be a Schema with properties
                if (isset($wrapperSchema->properties['value'])) {
                    return $wrapperSchema->properties['value'];
                }
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
        }

        // Call parent to create the promoted parameter
        $mappingGenerated = parent::addPropertyToClass(
            $classType,
            $namespace,
            $propertyName,
            $unwrappedSpec ?? $propertySpec,
            $type,
            $classConstructor
        );

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
     * Post-process the generated DTO class to add factory method support.
     */
    protected function afterDtoClassGenerated(ClassType $classType, PhpNamespace $namespace, Schema $schema): void
    {
        // Add Model parent class and factory support
        $modelClass = $this->config->namespace.'\\Foundation\\Hydration\\Model';
        $dtoName = $classType->getName();
        $factoryClass = $this->config->namespace.'\\Factories\\'.$dtoName.'Factory';

        // Update parent class to Model instead of Data
        $classType->setExtends($modelClass);

        // Add PHPDoc for factory method
        $classType->addComment("@extends \\{$modelClass}<\\{$factoryClass}>");
        $classType->addComment("@method static \\{$factoryClass} testFactory()");

        $namespace->addUse($modelClass);
    }
}
