<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryAdjustmentLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAdjustmentLineDtoFactory factory()
 */
class InventoryAdjustmentLineDto extends Model
{
    public function __construct(
        public ?WarehouseInInventoryAdjustmentLineDto $warehouse = null,
        public int|float|null $unitCost = null,
        public int|float|null $extCost = null,
        public ?string $receiptNumber = null,
        public ?string $poReceiptNumber = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryAdjustmentLineDto $inventoryItem = null,
        public ?LocationInInventoryAdjustmentLineDto $location = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public ?ReasonCodeInInventoryAdjustmentLineDto $reasonCode = null,
        public ?string $description = null,
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
