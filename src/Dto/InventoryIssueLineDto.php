<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\InventoryIssueLineTransactionTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryIssueLineDtoFactory testFactory()
 */
class InventoryIssueLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\InventoryIssueLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Trans. type > The type of inventory issue transaction. Select one of the
         * following types: Issue, Return, Invoice, Debit note, Credit note.
         */
        public ?InventoryIssueLineTransactionTypeEnum $transactionType = null,
        public ?WarehouseInInventoryIssueLineDto $warehouse = null,
        /** Unit cost > The cost of the specified unit of this stock item. */
        public int|float|null $unitCost = null,
        /**
         * Ext. cost > The extended cost of the specified stock item. An extended cost
         * is calculated automatically as the unit cost multiplied by the quantity of
         * units involved in this transaction.
         */
        public int|float|null $extCost = null,
        /** Unit price > The price of the specified unit of this stock item. */
        public int|float|null $unitPrice = null,
        /**
         * Ext. price > The extended price of the specified stock item, calculated
         * automatically as the unit price multiplied by the quantity of the stock item
         * involved in the inventory issue operation.
         */
        public int|float|null $extPrice = null,
        public ?ProjectInInventoryIssueLineDto $project = null,
        public ?ProjectTaskInInventoryIssueLineDto $projectTask = null,
        public ?string $lotSerialNumber = null,
        public ?\Carbon\Carbon $expirationDate = null,
        /** @var InallocationsDto[]|null */
        public ?array $allocations = null,
        /** Purchase order receipt number */
        public ?string $poReceiptNumber = null,
        public ?int $lineNumber = null,
        public ?InventoryItemInInventoryIssueLineDto $inventoryItem = null,
        public ?LocationInInventoryIssueLineDto $location = null,
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
        public ?ReasonCodeInInventoryIssueLineDto $reasonCode = null,
        /** Description > A brief description of the goods transfer transaction. */
        public ?string $description = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?BranchNumberDto $branchNumber = null,
    ) {}
}
