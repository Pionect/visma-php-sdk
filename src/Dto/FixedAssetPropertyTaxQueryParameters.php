<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetPropertyTaxQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxQueryParametersFactory factory()
 */
class FixedAssetPropertyTaxQueryParameters extends Model
{
    /** Property Tax ID that identifies the property tax group. */
    #[Property]
    public ?string $propertyTaxId;

    /** Set to True to select active fixed asset property tax groups. */
    #[Property]
    public ?bool $active;

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
