<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseQueryParametersFactory factory()
 */
class WarehouseQueryParameters extends Model
{
    /** Selects only the warehouses that are active/inactive. */
    #[Property]
    public ?bool $active;

    /** Selects only the warehouses for the specified branch. */
    #[Property]
    public ?string $branch;

    /** Pagination parameter. Page number. */
    #[Property]
    public ?int $pageNumber;

    /**
     * Pagination parameter. Number of items to be collected.
     * Please use a page size lower or equal to the allowed max page size which is returned as part of the metadata information.
     * If requested page size is greater than allowed max page size, request will be limited to max page size.
     */
    #[Property]
    public ?int $pageSize;
}
