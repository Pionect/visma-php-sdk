<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class LandedCostCodeDto extends Model
{
    /** Landed Cost Code */
    #[Property]
    public ?string $landedCostCodeId;

    /** Description */
    #[Property]
    public ?string $description;

    /** Type */
    #[Property]
    public ?string $landedCostType;

    /** Application Method */
    #[Property]
    public ?string $applicationMethod;

    /** Allocation Method */
    #[Property]
    public ?string $allocationMethod;

    /** Supplier ID */
    #[Property]
    public ?string $supplierId;

    /** Supplier Location ID */
    #[Property]
    public ?string $supplierLocationId;

    /** Terms */
    #[Property]
    public ?string $terms;

    /** Reason Code */
    #[Property]
    public ?string $reasonCode;

    /** Landed Cost Accrual Account */
    #[Property]
    public ?string $landedCostAccrualAccount;

    /** Landed Cost Accrual Sub. */
    #[Property]
    public ?string $landedCostAccrualSubaccount;

    /** Tax Category */
    #[Property]
    public ?string $vatCategory;

    /** Landed Cost Variance Account */
    #[Property]
    public ?string $landedCostVarianceAccount;

    /** Landed Cost Variance Sub. */
    #[Property]
    public ?string $landedCostVarianceSubaccount;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
