<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use cebe\openapi\spec\Schema;
use Nette\PhpGenerator\ClassType;
use Timatic\JsonApiSdk\Generators\JsonApiDtoGenerator;

class PlainJsonDtoGenerator extends JsonApiDtoGenerator
{
    /**
     * Extract properties directly from schema (no JSON:API attributes wrapper).
     *
     * @return Schema[]
     */
    protected function extractJsonApiProperties(Schema $schema): array
    {
        // For plain JSON, properties are directly on the schema
        return $schema->properties ?? [];
    }

    /**
     * Skip relationships entirely for plain JSON API.
     */
    protected function addRelationshipProperties(ClassType $classType, $namespace, Schema $schema): void
    {
        // No-op: plain JSON APIs don't have JSON:API style relationships
    }
}
