<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a inventory issue in InventoryIssueController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryReceiptUpdateDtoFactory factory()
 */
class InventoryReceiptUpdateDto extends Model
{
    public function __construct(
        public ?TransferNumberInInventoryReceiptUpdateDto $transferNumber = null,
        public ?ControlCostInInventoryReceiptUpdateDto $controlCost = null,
        public ?array $receiptLines = null,
        public ?ReferenceNumberInInventoryReceiptUpdateDto $referenceNumber = null,
        public ?HoldInInventoryReceiptUpdateDto $hold = null,
        public ?DateInInventoryReceiptUpdateDto $date = null,
        public ?PostPeriodInInventoryReceiptUpdateDto $postPeriod = null,
        public ?ExternalReferenceInInventoryReceiptUpdateDto $externalReference = null,
        public ?DescriptionInInventoryReceiptUpdateDto $description = null,
        public ?ControlQuantityInInventoryReceiptUpdateDto $controlQuantity = null,
        public ?BranchNumberInInventoryReceiptUpdateDto $branchNumber = null,
    ) {}
}
