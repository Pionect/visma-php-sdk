<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DiscountCodeQueryParameters extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** System retrieved information for state/condition. */
    #[Property]
    public ?string $lastModifiedDateTimeCondition;

    /** System retrieved information for created date and time. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    /** System retrieved information for state/condition. */
    #[Property]
    public ?string $createdDateTimeCondition;

    #[Property]
    public ?string $discountCode;

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
