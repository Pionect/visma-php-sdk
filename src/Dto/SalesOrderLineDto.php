<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\SalesOrderLineOperationEnum;
use Pionect\VismaSdk\Enums\SalesOrderLinePoSourceEnum;
use Pionect\VismaSdk\Enums\SalesOrderLineShipCompleteEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SalesOrderLineDtoFactory testFactory()
 */
class SalesOrderLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SalesOrderLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The reference number of the invoice generated for this order. This number is
         * collected from the system and not visible on the sales order line.
         */
        public ?string $invoiceNbr = null,
        /**
         * The operation to be performed in the workspace to fulfil the order. This
         * information is collected from the system and not visible on the sales order
         * line.
         */
        public ?SalesOrderLineOperationEnum $operation = null,
        /**
         * A check box that indicates (if selected) that the stock item specified in the
         * row is a free item. This information is collected from the system and not
         * visible on the sales order line.
         */
        public ?bool $freeItem = null,
        /**
         * Mandatory field: The top part  > Requested on* > The date when the customer
         * wants to receive the goods. The default value is the current business date.
         */
        public ?\Carbon\Carbon $requestedOn = null,
        /** Ship on > The date when the item is to be shipped. */
        public ?\Carbon\Carbon $shipOn = null,
        /**
         * Shipping rule > An option that controls whether incomplete and partial
         * shipments for the order are allowed. (Values: Ship complete, Back order
         * allowed, Cancel remainder)
         */
        public ?SalesOrderLineShipCompleteEnum $shipComplete = null,
        /**
         * Undership threshold (%) > The minimal percentage of goods shipped (with
         * respect to the ordered quantity) to consider the order shipped completely.
         */
        public int|float|null $undershipThreshold = null,
        /**
         * Overship threshold (%) > The maximum percentage of goods shipped (with
         * respect to the ordered quantity) allowed by the customer.
         */
        public int|float|null $overshipThreshold = null,
        /**
         * Completed > A check box that can be selected to indicate to the system that
         * this line is completed.
         */
        public ?bool $completed = null,
        /**
         * Mark for purchase order > A check box that indicates (if selected) that the
         * order line was marked for purchasing (if it has not been shipped completely).
         */
        #[MapName('markForPO')]
        public ?bool $markForPo = null,
        /**
         * Purchase order source > The purchase order source to be used to fulfill this
         * line, which can be one of the following options: Purchase to order,
         * Drop-shipment.
         */
        public ?SalesOrderLinePoSourceEnum $poSource = null,
        /** Lot/serial no. > The lot or serial number of the item for returns */
        public ?string $lotSerialNbr = null,
        /**
         * Expiration date > The expiration date for the item with the specified lot
         * number.
         */
        public ?\Carbon\Carbon $expirationDate = null,
        /**
         * Reason code > The reason code to be used for creation or cancellation of the
         * order, if applicable.
         */
        public ?string $reasonCode = null,
        public ?SalesPersonInSalesOrderLineDto $salesPerson = null,
        /** VAT code > The VAT category of the goods mentioned in this line. */
        public ?string $taxCategory = null,
        /** VAT code > The VAT category of the goods mentioned in this line. */
        public ?bool $commissionable = null,
        /**
         * Alternate ID > The alternate ID for the item, such as the item ID used by the
         * customer.
         */
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        /**
         * Project task > The particular task of the project with which this document is
         * associated.
         */
        public ?int $projectTask = null,
        /**
         * Project task code > The particular task code of the project with which this
         * document is associated.
         */
        public ?string $projectTaskCd = null,
        public ?SubaccountInSalesOrderLineDto $subaccount = null,
        public ?string $externalLink = null,
        public ?bool $isRotRutDeductible = null,
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
