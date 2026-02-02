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
        public int|float|null $unitCost = null,
        public int|float|null $extCost = null,
        public ?ProjectInInventoryReceiptLineDto $project = null,
        public ?ProjectTaskInInventoryReceiptLineDto $projectTask = null,
        public ?array $allocations = null,
        public ?string $poReceiptNumber = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryReceiptLineDto $inventoryItem = null,
        public ?LocationInInventoryReceiptLineDto $location = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public ?ReasonCodeInInventoryReceiptLineDto $reasonCode = null,
        public ?string $description = null,
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
