<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\StocktakeLineV2dtoStatusEnum;
use Pionect\VismaSdk\Enums\StocktakeV2dtoSummaryStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StocktakePagingQueryParametersFactory testFactory()
 */
class StocktakePagingQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Filter by Warehouse. */
        public ?string $warehouse = null,
        /** Filter by Location. */
        public ?string $location = null,
        /** Filter by Inventory. */
        public ?string $inventory = null,
        /** Filter by LotSerialNumber. */
        public ?string $lotSerialNumber = null,
        /** Filter by SummaryStatus. */
        public ?StocktakeV2dtoSummaryStatusEnum $summaryStatus = null,
        /** Filter by LineNumber GreaterEqual StartWithLine. */
        public ?int $startWithLine = null,
        /** Filter by by LineNumber LessEqual EndWithLine. */
        public ?int $endWithLine = null,
        /** Filter by FreezeDateTime. */
        public ?string $freezeDateTime = null,
        /** Filter by FreezeDateTimeCondition. */
        public ?string $freezeDateTimeCondition = null,
        /**
         * System generated value for last modification of transaction/record. Use
         * format: YYYY-MM-DD HH:MM (date and time) to filter from date to present..
         */
        public ?string $lastModifiedDateTime = null,
        /** System retrieved information for state/condition. */
        public ?string $lastModifiedDateTimeCondition = null,
        /** Filter by ExpirationDateTime. */
        public ?string $expirationDateTime = null,
        /** Filter by ExpirationDateTimeCondition. */
        public ?string $expirationDateTimeCondition = null,
        /** Filter by StocktakeLineStatus. */
        public ?StocktakeLineV2dtoStatusEnum $status = null,
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
