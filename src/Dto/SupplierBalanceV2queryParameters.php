<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Query parameters for Suppliers Balance - version 2
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierBalanceV2queryParametersFactory testFactory()
 */
class SupplierBalanceV2queryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Filter by Branch */
        public ?string $branch = null,
        /** Filter by Supplier */
        public ?string $supplier = null,
        /**
         * Filter from financial period, format YYYYPP
         * The filte is inclusive, the records for the specified period will be included
         * in the results.
         * This filter is required.
         */
        public ?string $fromFinPeriod = null,
        /**
         * Filter to financial period, format YYYYPP
         * The filte is inclusive, the records for the specified period will be included
         * in the results.
         * This filter is required.
         */
        public ?string $toFinPeriod = null,
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
