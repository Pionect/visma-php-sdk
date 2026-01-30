<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LandedCostCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LandedCostCodeDtoFactory factory()
 */
class LandedCostCodeDto extends Model
{
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
