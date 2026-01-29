<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Timatic\JsonApiSdk\Generators\JsonApiFactoryGenerator;

class PlainJsonFactoryGenerator extends JsonApiFactoryGenerator
{
    /**
     * Override to NOT skip 'id' and 'type' properties for plain JSON APIs.
     * For plain JSON, 'id' and 'type' are domain properties that should be included in factories.
     */
    protected function getPropertiesToSkip(): array
    {
        return []; // Don't skip any properties
    }

    protected function extractDtoProperties(): array
    {
        if (! $this->dtoSchema) {
            return [];
        }

        return $this->dtoSchema->properties;
    }

    public function getReferencedDtoClass(string $propertyName): ?string
    {
        $referencedDtoClass = parent::getReferencedDtoClass($propertyName);

        if (is_null($referencedDtoClass) || str_starts_with($referencedDtoClass, 'DtoValueOf')) {
            return null;
        }

        return $referencedDtoClass;
    }
}
