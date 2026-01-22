<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CarrierQueryParameters extends Model
{
    /** This field has been deprecated and will be removed in future versions. */
    #[Property]
    public ?int $numberToRead;

    /** This field has been deprecated and will be removed in future versions. */
    #[Property]
    public ?int $skipRecords;

    /** System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** System retrieved information for state/condition. */
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
