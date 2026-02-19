<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a SOOrder in SOOrderController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderDocumentLineDtoFactory testFactory()
 */
class SalesOrderDocumentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Document details tab > Line no. > The line number of the document. */
        public ?int $lineNbr = null,
        /**
         * Document details tab > Line order > The order number of the document line.
         * The system regenerates this number automatically when you reorder the lines
         * in the table.
         */
        public ?int $sortOrder = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        public ?WarehouseIdDescriptionDto $warehouse = null,
        /**
         * Mandatory field: Document details tab > UoM* > The unit of measure (UoM) used
         * for the item with this item ID.
         */
        public ?string $uom = null,
        /**
         * Document details tab > Quantity > The quantity of the item sold, measured in
         * the UoM.
         */
        public int|float|null $quantity = null,
        /**
         * Document details tab > Qty. on shipments > A read-only column that displays
         * the quantity of the stock item being prepared for shipment and already
         * shipped for this order.
         */
        public int|float|null $qtyOnShipments = null,
        /**
         * Document details tab > Open qty. > The quantity of the item to be shipped;
         * that is, the total quantity minus the quantity shipped according to closed
         * shipment documents.
         */
        public int|float|null $openQty = null,
        /** Document details tab > Unit Cost > The cost of the unit on the sales order. */
        public int|float|null $unitCost = null,
        /** Document details tab > Unit price > The price of the unit on the sales order. */
        public int|float|null $unitPrice = null,
        public int|float|null $unitPriceInBaseCurrency = null,
        /**
         * Mandatory field: Document details tab > Discount details tab > Discount code*
         * > The code of the discount that has been applied to this line.
         */
        public ?string $discountCode = null,
        /**
         * Document details tab > Discount percent > The percent of the line-level
         * discount that has been applied manually or automatically to this line item
         * (if the item is not a free item).
         */
        public int|float|null $discountPercent = null,
        /**
         * Document details tab > Discount amount > The amount of the line-level
         * discount that has been applied manually or automatically to this line item
         * (if the item is not a free item).
         */
        public int|float|null $discountAmount = null,
        /**
         * Document details tab > Manual discount > A check box that indicates (if
         * selected) that the discount has been applied manually.
         */
        public ?bool $manualDiscount = null,
        /**
         * Document details tab > Disc. unit price > The unit price, which has been
         * recalculated after the application of discounts.
         */
        public int|float|null $discUnitPrice = null,
        /**
         * Document details tab > Extended cost > The extended price, which is the unit
         * price multiplied by the quantity.
         */
        public int|float|null $extPrice = null,
        /**
         * Document details tab > Amount not yet invoiced > The amount of cancelled
         * shipments and cancelled remainders.
         */
        public int|float|null $unbilledAmount = null,
        /** Document details tab > Line description > The description of the unit. */
        public ?string $lineDescription = null,
        public ?BranchNumberDto $branchNumber = null,
        /**
         * Tables in tab > Icon Notes > Pop-up window for providing any user-defined
         * text connected to the order.
         */
        public ?string $note = null,
        /**
         * @var AttachmentDto[]|null
         *                           The data containing information about the document attachments
         */
        public ?array $attachments = null,
    ) {}
}
