<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use cebe\openapi\spec\Schema;
use Nette\PhpGenerator\ClassType;
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
