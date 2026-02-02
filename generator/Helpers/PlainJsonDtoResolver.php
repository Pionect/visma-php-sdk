<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Helpers;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Helpers\DtoResolver;

class PlainJsonDtoResolver extends DtoResolver
{
    /**
     * Override to unwrap BasePaginationDtoOf* wrappers.
     * Returns the item DTO class name instead of wrapper.
     */
    public function resolveResponseDtoClassName(Endpoint $endpoint): ?string
    {
        $className = parent::resolveResponseDtoClassName($endpoint);

        if (! $className) {
            return null;
        }

        // Check if this is a BasePaginationDtoOf* wrapper
        if (preg_match('/^BasePaginationDtoOf(.+)Dto$/', $className, $matches)) {
            // Return unwrapped item type (e.g., "DiscountDto" from "BasePaginationDtoOfDiscountDto")
            return $matches[1].'Dto';
        }

        return $className;
    }

    /**
     * Check if endpoint response is wrapped in BasePaginationDto.
     * This checks the ORIGINAL schema, not the unwrapped DTO.
     */
    public function isBasePaginationResponse(Endpoint $endpoint): bool
    {
        if (! isset($endpoint->response['schema'])) {
            return false;
        }

        $schema = $endpoint->response['schema'];

        // Check for $ref pattern
        if (is_array($schema) && isset($schema['$ref'])) {
            $schemaName = basename($schema['$ref']);

            return str_starts_with($schemaName, 'BasePaginationDtoOf');
        }

        // Check for string schema name
        if (is_string($schema)) {
            return str_starts_with($schema, 'BasePaginationDtoOf');
        }

        return false;
    }
}
