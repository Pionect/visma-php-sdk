<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryReceiptLineDto extends Model
{
    #[Property]
    public ?warehouseInInventoryReceiptLineDto $warehouse;

    /** Unit cost &gt; The cost of a unit of the received stock item. */
    #[Property]
    public ?float $unitCost;

    /** Cost &gt; The extended cost of the received stock item. An extended cost is calculated automatically as the unit cost multiplied by the quantity (or amount) of item that was received. */
    #[Property]
    public ?float $extCost;

    #[Property]
    public ?projectInInventoryReceiptLineDto $project;

    #[Property]
    public ?projectTaskInInventoryReceiptLineDto $projectTask;

    #[Property]
    public ?array $allocations;

    /** Purchase order receipt number */
    #[Property]
    public ?string $poReceiptNumber;

    #[Property]
    public ?int $lineNumber;

    #[Property]
    public ?inventoryItemInInventoryReceiptLineDto $inventoryItem;

    #[Property]
    public ?locationInInventoryReceiptLineDto $location;

    /** Quantity &gt; The quantity of the transferred goods (in the units indicated below). */
    #[Property]
    public ?float $quantity;

    /** Mandatory field: UoM* &gt; The unit of measure (UoM) used for the goods to be transferred. */
    #[Property]
    public ?string $uom;

    #[Property]
    public ?reasonCodeInInventoryReceiptLineDto $reasonCode;

    /** Description &gt; A brief description of the goods transfer transaction. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?array $attachments;

    #[Property]
    public ?BranchNumberDto $branchNumber;
}
