<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryIssueLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIssueLineDtoFactory testFactory()
 */
class InventoryIssueLineDto extends Model
{
    public function __construct(
        public ?string $transactionType = null,
        public ?WarehouseInInventoryIssueLineDto $warehouse = null,
        public int|float|null $unitCost = null,
        public int|float|null $extCost = null,
        public int|float|null $unitPrice = null,
        public int|float|null $extPrice = null,
        public ?ProjectInInventoryIssueLineDto $project = null,
        public ?ProjectTaskInInventoryIssueLineDto $projectTask = null,
        public ?string $lotSerialNumber = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?array $allocations = null,
        public ?string $poReceiptNumber = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryIssueLineDto $inventoryItem = null,
        public ?LocationInInventoryIssueLineDto $location = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public ?ReasonCodeInInventoryIssueLineDto $reasonCode = null,
        public ?string $description = null,
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
