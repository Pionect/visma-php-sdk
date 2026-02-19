<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Allocations for Purchase Receipt Line in PurchaseReceiptController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsDtoFactory testFactory()
 */
class AllocationsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Line no. > The line of the purchase order that contains the selected item. */
        public ?int $lineNbr = null,
        /** ItemId > The id of the item. */
        public ?string $itemId = null,
        public ?LocationInAllocationsDto $location = null,
        /** Lot/Serial no. > The lot or serial number of the item. */
        public ?string $lotSerialNumber = null,
        /**
         * Quantity > The quantity of the stock item with the same lot number. It is 1
         * for items with serial numbers.
         */
        public int|float|null $quantity = null,
        /** UoM > The unit of measure for the specified quantity of the inventory item. */
        public ?string $uom = null,
        /**
         * Expiration date > The expiration date of the specified quantity of the stock
         * item.
         */
        public ?\Carbon\Carbon $expirationDate = null,
        /** Description > The description of the stock item. */
        public ?string $description = null,
    ) {}
}
