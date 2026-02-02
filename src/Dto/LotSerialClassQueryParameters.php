<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassQueryParametersFactory testFactory()
 */
class LotSerialClassQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $description = null,
        public ?string $trackingMethod = null,
        public ?bool $trackExpirationDate = null,
        public ?bool $requiredForDropShip = null,
        public ?string $assignmentMethod = null,
        public ?string $issueMethod = null,
        public ?bool $autoIncrementalValueBetweenClasses = null,
        public ?string $autoIncrementalValue = null,
        public ?bool $autoGenerateNextNumber = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
