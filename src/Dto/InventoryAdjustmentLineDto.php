<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryAdjustmentLineDtoFactory testFactory()
 */
class InventoryAdjustmentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?WarehouseInInventoryAdjustmentLineDto $warehouse = null,
        /** Unit cost > The cost of the unit used as base unit for the stock item. */
        public int|float|null $unitCost = null,
        /** Cost > The cost of the item. */
        public int|float|null $extCost = null,
        /** Receipt no. > Reference number for the receipt for the stock item. */
        public ?string $receiptNumber = null,
        /** Purchase order receipt number */
        public ?string $poReceiptNumber = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryAdjustmentLineDto $inventoryItem = null,
        public ?LocationInInventoryAdjustmentLineDto $location = null,
        /**
         * Quantity > The quantity of the transferred goods (in the units indicated
         * below).
         */
        public int|float|null $quantity = null,
        /**
         * Mandatory field: UoM* > The unit of measure (UoM) used for the goods to be
         * transferred.
         */
        public ?string $uom = null,
        public ?ReasonCodeInInventoryAdjustmentLineDto $reasonCode = null,
        /** Description > A brief description of the goods transfer transaction. */
        public ?string $description = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
