<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a RutRot in RutRotController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RotRutDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutDtoFactory testFactory()
 */
class RotRutDto extends Model
{
    public function __construct(
        public ?string $docType = null,
        public ?string $refNbr = null,
        public ?bool $distributedAutomaticaly = null,
        public ?string $type = null,
        public int|float|null $totalDeductableAmount = null,
        public int|float|null $otherCost = null,
        public int|float|null $materialCost = null,
        public int|float|null $workPrice = null,
        public int|float|null $distributedAmount = null,
        public ?string $appartment = null,
        public ?string $estate = null,
        public ?string $organizationNbr = null,
        public ?array $distribution = null,
    ) {}
}
