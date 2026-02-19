<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\KitAssemblyQueryParametersStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyQueryParametersFactory testFactory()
 */
class KitAssemblyQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $lastModifiedDateTime = null,
        /** System retrieved information for state/condition. */
        public ?string $lastModifiedDateTimeCondition = null,
        /** System retrieved information for created date and time. */
        public ?string $createdDateTime = null,
        /** System retrieved information for state/condition. */
        public ?string $createdDateTimeCondition = null,
        public ?string $type = null,
        public ?string $refNo = null,
        /**
         * Filter by Kit Assembly Status. Possible values: H (Hold), B (Balanced), R
         * (Released)
         */
        public ?KitAssemblyQueryParametersStatusEnum $status = null,
        public ?bool $expandStockComponents = null,
        public ?bool $expandNonStockComponents = null,
        public ?bool $expandKitAllocations = null,
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
