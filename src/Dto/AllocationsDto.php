<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Allocations for Purchase Receipt Line in PurchaseReceiptController. Used for
 * getting data.
 */
class AllocationsDto extends Model
{
    /** Line no. &gt; The line of the purchase order that contains the selected item. */
    #[Property]
    public ?int $lineNbr;

    /** ItemId &gt; The id of the item. */
    #[Property]
    public ?string $itemId;

    #[Property]
    public ?\locationInAllocationsDto $location;

    /** Lot/Serial no. &gt; The lot or serial number of the item. */
    #[Property]
    public ?string $lotSerialNumber;

    /** Quantity &gt; The quantity of the stock item with the same lot number. It is 1 for items with serial numbers. */
    #[Property]
    public ?float $quantity;

    /** UoM &gt; The unit of measure for the specified quantity of the inventory item. */
    #[Property]
    public ?string $uom;

    /** Expiration date &gt; The expiration date of the specified quantity of the stock item. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** Description &gt; The description of the stock item. */
    #[Property]
    public ?string $description;
}
