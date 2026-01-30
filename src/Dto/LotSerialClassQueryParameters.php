<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LotSerialClassQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassQueryParametersFactory factory()
 */
class LotSerialClassQueryParameters extends Model
{
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
