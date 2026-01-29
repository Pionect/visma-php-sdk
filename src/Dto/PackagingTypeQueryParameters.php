<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackagingTypeQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingTypeQueryParametersFactory factory()
 */
class PackagingTypeQueryParameters extends Model
{
    /** This field has been deprecated and will be removed in future versions. */
    #[Property]
    public ?string $greaterThanValue;

    /** This field has been deprecated and will be removed in future versions. */
    #[Property]
    public ?int $numberToRead;

    /** This field has been deprecated and will be removed in future versions. */
    #[Property]
    public ?int $skipRecords;

    /** This field has been deprecated and will be removed in future versions. The OrderBy parameter has no effect on the result. */
    #[Property]
    public ?string $orderBy;

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
