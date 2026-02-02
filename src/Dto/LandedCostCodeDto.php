<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LandedCostCodeDtoFactory testFactory()
 */
class LandedCostCodeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $landedCostCodeId = null,
        public ?string $description = null,
        public ?string $landedCostType = null,
        public ?string $applicationMethod = null,
        public ?string $allocationMethod = null,
        public ?string $supplierId = null,
        public ?string $supplierLocationId = null,
        public ?string $terms = null,
        public ?string $reasonCode = null,
        public ?string $landedCostAccrualAccount = null,
        public ?string $landedCostAccrualSubaccount = null,
        public ?string $vatCategory = null,
        public ?string $landedCostVarianceAccount = null,
        public ?string $landedCostVarianceSubaccount = null,
        public ?string $errorInfo = null,
    ) {}
}
