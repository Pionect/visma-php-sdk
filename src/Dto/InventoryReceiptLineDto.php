<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryReceiptLineDtoFactory testFactory()
 */
class InventoryReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?WarehouseInInventoryReceiptLineDto $warehouse = null,
        /** Unit cost > The cost of a unit of the received stock item. */
        public int|float|null $unitCost = null,
        /**
         * Cost > The extended cost of the received stock item. An extended cost is
         * calculated automatically as the unit cost multiplied by the quantity (or
         * amount) of item that was received.
         */
        public int|float|null $extCost = null,
        public ?ProjectInInventoryReceiptLineDto $project = null,
        public ?ProjectTaskInInventoryReceiptLineDto $projectTask = null,
        /** @var InallocationsDto[]|null */
        public ?array $allocations = null,
        /** Purchase order receipt number */
        public ?string $poReceiptNumber = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryReceiptLineDto $inventoryItem = null,
        public ?LocationInInventoryReceiptLineDto $location = null,
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
        public ?ReasonCodeInInventoryReceiptLineDto $reasonCode = null,
        /** Description > A brief description of the goods transfer transaction. */
        public ?string $description = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
