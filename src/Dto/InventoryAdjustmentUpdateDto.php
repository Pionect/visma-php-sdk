<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAdjustmentUpdateDtoFactory testFactory()
 */
class InventoryAdjustmentUpdateDto extends Model
{
    public function __construct(
        public ?ControlCostInInventoryAdjustmentUpdateDto $controlCost = null,
        public ?array $adjustmentLines = null,
        public ?ReferenceNumberInInventoryAdjustmentUpdateDto $referenceNumber = null,
        public ?HoldInInventoryAdjustmentUpdateDto $hold = null,
        public ?DateInInventoryAdjustmentUpdateDto $date = null,
        public ?PostPeriodInInventoryAdjustmentUpdateDto $postPeriod = null,
        public ?ExternalReferenceInInventoryAdjustmentUpdateDto $externalReference = null,
        public ?DescriptionInInventoryAdjustmentUpdateDto $description = null,
        public ?ControlQuantityInInventoryAdjustmentUpdateDto $controlQuantity = null,
        public ?BranchNumberInInventoryAdjustmentUpdateDto $branchNumber = null,
    ) {}
}
