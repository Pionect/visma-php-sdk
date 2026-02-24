<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\LotSerialClassAssignmentMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassIssueMethodEnum;
use Pionect\VismaSdk\Enums\LotSerialClassTrackingMethodEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassQueryParametersFactory testFactory()
 */
class LotSerialClassQueryParameters extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LotSerialClassQueryParametersFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $description = null,
        public ?LotSerialClassTrackingMethodEnum $trackingMethod = null,
        public ?bool $trackExpirationDate = null,
        public ?bool $requiredForDropShip = null,
        public ?LotSerialClassAssignmentMethodEnum $assignmentMethod = null,
        public ?LotSerialClassIssueMethodEnum $issueMethod = null,
        public ?bool $autoIncrementalValueBetweenClasses = null,
        public ?string $autoIncrementalValue = null,
        public ?bool $autoGenerateNextNumber = null,
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
