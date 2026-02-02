<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a RutRot in RutRotController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\RotRutDtoFactory testFactory()
 */
class RotRutDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
