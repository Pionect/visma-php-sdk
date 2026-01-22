<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class StocktakePagingQueryParameters extends Model
{
    /** Filter by Warehouse. */
    #[Property]
    public ?string $warehouse;

    /** Filter by Location. */
    #[Property]
    public ?string $location;

    /** Filter by Inventory. */
    #[Property]
    public ?string $inventory;

    /** Filter by LotSerialNumber. */
    #[Property]
    public ?string $lotSerialNumber;

    /** Filter by SummaryStatus. */
    #[Property]
    public ?string $summaryStatus;

    /** Filter by LineNumber GreaterEqual StartWithLine. */
    #[Property]
    public ?int $startWithLine;

    /** Filter by by LineNumber LessEqual EndWithLine. */
    #[Property]
    public ?int $endWithLine;

    /** Filter by FreezeDateTime. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $freezeDateTime;

    /** Filter by FreezeDateTimeCondition. */
    #[Property]
    public ?string $freezeDateTimeCondition;

    /** System generated value for last modification of transaction/record. Use format: YYYY-MM-DD HH:MM (date and time) to filter from date to present.. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** System retrieved information for state/condition. */
    #[Property]
    public ?string $lastModifiedDateTimeCondition;

    /** Filter by ExpirationDateTime. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDateTime;

    /** Filter by ExpirationDateTimeCondition. */
    #[Property]
    public ?string $expirationDateTimeCondition;

    /** Filter by StocktakeLineStatus. */
    #[Property]
    public ?string $status;

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
