<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PackagingTypeQueryParametersFactory testFactory()
 */
class PackagingTypeQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** This field has been deprecated and will be removed in future versions. */
        public ?string $greaterThanValue = null,
        /** This field has been deprecated and will be removed in future versions. */
        public ?int $numberToRead = null,
        /** This field has been deprecated and will be removed in future versions. */
        public ?int $skipRecords = null,
        /**
         * This field has been deprecated and will be removed in future versions. The
         * OrderBy parameter has no effect on the result.
         */
        public ?string $orderBy = null,
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
