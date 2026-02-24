<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\LandedCostCodeAllocationMethodEnum;
use Pionect\VismaSdk\Enums\LandedCostCodeApplicationMethodEnum;
use Pionect\VismaSdk\Enums\LandedCostCodeLandedCostTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LandedCostCodeDtoFactory testFactory()
 */
class LandedCostCodeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LandedCostCodeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Landed Cost Code */
        public ?string $landedCostCodeId = null,
        /** Description */
        public ?string $description = null,
        /** Type */
        public ?LandedCostCodeLandedCostTypeEnum $landedCostType = null,
        /** Application Method */
        public ?LandedCostCodeApplicationMethodEnum $applicationMethod = null,
        /** Allocation Method */
        public ?LandedCostCodeAllocationMethodEnum $allocationMethod = null,
        /** Supplier ID */
        public ?string $supplierId = null,
        /** Supplier Location ID */
        public ?string $supplierLocationId = null,
        /** Terms */
        public ?string $terms = null,
        /** Reason Code */
        public ?string $reasonCode = null,
        /** Landed Cost Accrual Account */
        public ?string $landedCostAccrualAccount = null,
        /** Landed Cost Accrual Sub. */
        public ?string $landedCostAccrualSubaccount = null,
        /** Tax Category */
        public ?string $vatCategory = null,
        /** Landed Cost Variance Account */
        public ?string $landedCostVarianceAccount = null,
        /** Landed Cost Variance Sub. */
        public ?string $landedCostVarianceSubaccount = null,
        public ?string $errorInfo = null,
    ) {}
}
