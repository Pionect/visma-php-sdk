<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Generators\FactoryGenerator;
use Crescat\SaloonSdkGenerator\Helpers\DtoResolver;
use Nette\PhpGenerator\PhpFile;
use Pionect\VismaSdk\Foundation\Factories\Factory;
use Pionect\VismaSdk\Generator\Helpers\VismaDtoResolver;

class VismaFactoryGenerator extends FactoryGenerator
{
    protected string $factoryClass = Factory::class;

    protected function createDtoResolver(Config $config, GeneratedCode $generatedCode): DtoResolver
    {
        $resolver = new VismaDtoResolver($config);
        $resolver->setGeneratedCode($generatedCode);

        return $resolver;
    }

    /**
     * Override to NOT skip 'id' and 'type' properties for plain JSON APIs.
     * For plain JSON, 'id' and 'type' are domain properties that should be included in factories.
     */
    protected function getPropertiesToSkip(): array
    {
        return []; // Don't skip any properties
    }

    /**
     * Get DTO properties from constructor parameters (Spatie Data style with promoted properties).
     * Overrides parent's property-based extraction since our DTOs use constructor promotion.
     *
     * @return array<array{name: string, type: ?string, isDateTime: bool}>
     */
    protected function getDtoPropertiesFromPhpFile(PhpFile $dtoClass): array
    {
        $properties = [];
        $propertiesToSkip = $this->getPropertiesToSkip();

        foreach ($dtoClass->getNamespaces() as $ns) {
            foreach ($ns->getClasses() as $class) {
                // Get constructor method
                $constructor = $class->getMethod('__construct');
                if (! $constructor) {
                    continue;
                }

                // Extract promoted parameters from constructor
                foreach ($constructor->getParameters() as $parameter) {
                    $paramName = $parameter->getName();

                    // Skip properties defined in getPropertiesToSkip()
                    if (in_array($paramName, $propertiesToSkip)) {
                        continue;
                    }

                    // Check if parameter has WithTransformer attribute (ValueWrapperTransformer)
                    $hasValueWrapperTransformer = false;
                    foreach ($parameter->getAttributes() as $attribute) {
                        $attrName = $attribute->getName();
                        if (str_contains($attrName, 'WithTransformer')) {
                            $hasValueWrapperTransformer = true;
                            break;
                        }
                    }

                    // Check if parameter has DataCollectionOf attribute (indicates collection relationship)
                    $hasDataCollectionOf = false;
                    foreach ($parameter->getAttributes() as $attribute) {
                        $attrName = $attribute->getName();
                        if (str_contains($attrName, 'DataCollectionOf')) {
                            $hasDataCollectionOf = true;
                            break;
                        }
                    }

                    // Skip relationship properties
                    if ($hasDataCollectionOf) {
                        continue;
                    }

                    // Get parameter type
                    $typeName = $parameter->getType();
                    $typeName = is_string($typeName) ? $typeName : null;

                    // Check if it's a DateTime/Carbon type
                    $isDateTime = false;
                    if ($typeName) {
                        $normalized = ltrim($typeName, '?\\');
                        if (str_contains($normalized, 'Carbon\\Carbon') || str_ends_with($normalized, 'Carbon')) {
                            $isDateTime = true;
                            $typeName = 'Carbon\\Carbon';
                        }
                    }

                    $properties[] = [
                        'name' => $paramName,
                        'type' => $typeName,
                        'isDateTime' => $isDateTime,
                    ];
                }

                // Only consider the first class in this file
                break 2;
            }
        }

        return $properties;
    }

    /**
     * Skip DtoValueOf wrapper classes when checking for referenced DTOs.
     */
    public function getReferencedDtoClass(?string $propertyType): ?string
    {
        $referencedDtoClass = parent::getReferencedDtoClass($propertyType);

        if (is_null($referencedDtoClass) || str_starts_with($referencedDtoClass, 'DtoValueOf')) {
            return null;
        }

        return $referencedDtoClass;
    }
}
