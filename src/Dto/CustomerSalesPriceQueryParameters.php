<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerSalesPriceQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceQueryParametersFactory factory()
 */
class CustomerSalesPriceQueryParameters extends Model
{
    #[Property]
    public ?string $greaterThanValue;

    /** This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. */
    #[Property]
    public ?int $numberToRead;

    /** This field has been deprecated and will be removed in future versions. Use pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does not work with NumberToRead and SkipRecords. */
    #[Property]
    public ?int $skipRecords;

    #[Property]
    public ?string $priceType;

    #[Property]
    public ?string $priceCode;

    #[Property]
    public ?string $inventoryId;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveAsOf;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $lastModifiedDateTimeCondition;

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
