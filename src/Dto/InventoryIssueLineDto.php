<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryIssueLineDto extends Model
{
    /** Trans. type &gt; The type of inventory issue transaction. Select one of the following types: Issue, Return, Invoice, Debit note, Credit note. */
    #[Property]
    public ?string $transactionType;

    #[Property]
    public ?warehouseInInventoryIssueLineDto $warehouse;

    /** Unit cost &gt; The cost of the specified unit of this stock item. */
    #[Property]
    public ?float $unitCost;

    /** Ext. cost &gt; The extended cost of the specified stock item. An extended cost is calculated automatically as the unit cost multiplied by the quantity of units involved in this transaction. */
    #[Property]
    public ?float $extCost;

    /** Unit price &gt; The price of the specified unit of this stock item. */
    #[Property]
    public ?float $unitPrice;

    /** Ext. price &gt; The extended price of the specified stock item, calculated automatically as the unit price multiplied by the quantity of the stock item involved in the inventory issue operation. */
    #[Property]
    public ?float $extPrice;

    #[Property]
    public ?projectInInventoryIssueLineDto $project;

    #[Property]
    public ?projectTaskInInventoryIssueLineDto $projectTask;

    #[Property]
    public ?string $lotSerialNumber;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?array $allocations;

    /** Purchase order receipt number */
    #[Property]
    public ?string $poReceiptNumber;

    #[Property]
    public ?int $lineNumber;

    #[Property]
    public ?inventoryItemInInventoryIssueLineDto $inventoryItem;

    #[Property]
    public ?locationInInventoryIssueLineDto $location;

    /** Quantity &gt; The quantity of the transferred goods (in the units indicated below). */
    #[Property]
    public ?float $quantity;

    /** Mandatory field: UoM* &gt; The unit of measure (UoM) used for the goods to be transferred. */
    #[Property]
    public ?string $uom;

    #[Property]
    public ?reasonCodeInInventoryIssueLineDto $reasonCode;

    /** Description &gt; A brief description of the goods transfer transaction. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?array $attachments;

    #[Property]
    public ?BranchNumberDto $branchNumber;
}
