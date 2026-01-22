<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryAdjustmentLineDto extends Model
{
    #[Property]
    public ?\warehouseInInventoryAdjustmentLineDto $warehouse;

    /** Unit cost &gt; The cost of the unit used as base unit for the stock item. */
    #[Property]
    public ?float $unitCost;

    /** Cost &gt; The cost of the item. */
    #[Property]
    public ?float $extCost;

    /** Receipt no. &gt; Reference number for the receipt for the stock item. */
    #[Property]
    public ?string $receiptNumber;

    /** Purchase order receipt number */
    #[Property]
    public ?string $poReceiptNumber;

    #[Property]
    public ?int $lineNumber;

    #[Property]
    public ?\inventoryItemInInventoryAdjustmentLineDto $inventoryItem;

    #[Property]
    public ?\locationInInventoryAdjustmentLineDto $location;

    /** Quantity &gt; The quantity of the transferred goods (in the units indicated below). */
    #[Property]
    public ?float $quantity;

    /** Mandatory field: UoM* &gt; The unit of measure (UoM) used for the goods to be transferred. */
    #[Property]
    public ?string $uom;

    #[Property]
    public ?\reasonCodeInInventoryAdjustmentLineDto $reasonCode;

    /** Description &gt; A brief description of the goods transfer transaction. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?array $attachments;

    #[Property]
    public ?\BranchNumberDto $branchNumber;
}
