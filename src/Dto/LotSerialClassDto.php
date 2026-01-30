<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LotSerialClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassDtoFactory factory()
 */
class LotSerialClassDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $trackingMethod = null,
        public ?bool $trackExpirationDate = null,
        public ?bool $requiredForDropShip = null,
        public ?string $assignmentMethod = null,
        public ?string $issueMethod = null,
        public ?bool $autoIncrementalValueBetweenClasses = null,
        public ?string $autoIncrementalValue = null,
        public ?bool $autoGenerateNextNumber = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $details = null,
        public ?string $errorInfo = null,
    ) {}
}
