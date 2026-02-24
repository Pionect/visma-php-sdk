<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerSalesPriceQueryParametersPriceTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceQueryParametersFactory testFactory()
 */
class CustomerSalesPriceQueryParameters extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerSalesPriceQueryParametersFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $greaterThanValue = null,
        /**
         * This field has been deprecated and will be removed in future versions. Use
         * pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does
         * not work with NumberToRead and SkipRecords.
         */
        public ?int $numberToRead = null,
        /**
         * This field has been deprecated and will be removed in future versions. Use
         * pagenumber and pagesize for pagination purposes. Pagenumber and pagesize does
         * not work with NumberToRead and SkipRecords.
         */
        public ?int $skipRecords = null,
        public ?CustomerSalesPriceQueryParametersPriceTypeEnum $priceType = null,
        public ?string $priceCode = null,
        public ?string $inventoryId = null,
        public ?\Carbon\Carbon $effectiveAsOf = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        /** Pagination parameter. Page number. */
        public ?int $pageNumber = null,
        /**
         * Pagination parameter. Number of items to be collected.
         * Please use a page size lower or equal to the allowed max page size which is
         * returned as part of the metadata information.
         * If requested page size is greater than allowed max page size, request will be
         * limited to max page size.
         */
        public ?int $pageSize = null,
    ) {}
}
