<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Query parameters for Suppliers Balance - version 2
 */
class SupplierBalanceV2queryParameters extends Model
{
    /** Filter by Branch */
    #[Property]
    public ?string $branch;

    /** Filter by Supplier */
    #[Property]
    public ?string $supplier;

    /**
     * Filter from financial period, format YYYYPP
     * The filte is inclusive, the records for the specified period will be included in the results.
     * This filter is required.
     */
    #[Property]
    public ?string $fromFinPeriod;

    /**
     * Filter to financial period, format YYYYPP
     * The filte is inclusive, the records for the specified period will be included in the results.
     * This filter is required.
     */
    #[Property]
    public ?string $toFinPeriod;

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
