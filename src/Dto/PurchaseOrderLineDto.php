<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseOrderLineLineTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderLineReceiptActionEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Order Line in PurchaseOrderController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderLineDtoFactory testFactory()
 */
class PurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The line number */
        public ?int $lineNbr = null,
        public ?BranchInPurchaseOrderLineDto $branch = null,
        public ?InventoryInPurchaseOrderLineDto $inventory = null,
        /**
         * Line type > 	The type of the order line, which can be one of the following
         * options: Goods for inventory, Non-stock, Service, Freight, Good for sales
         * order, Non-stock for drop-ship, Drop-ship, Goods for RP, Description.
         */
        public ?PurchaseOrderLineLineTypeEnum $lineType = null,
        public ?WarehouseInPurchaseOrderLineDto $warehouse = null,
        /** A description of the order line, which is copied from the item's description. */
        public ?string $lineDescription = null,
        /**
         * UoM > The unit of measure (UoM) in which the quantity of the item is
         * specified.
         */
        public ?string $uom = null,
        /** Order qty. > The quantity of the item that has been ordered. */
        public int|float|null $orderQty = null,
        /** Base Order qty. > The base quantity of the item that has been ordered. */
        public int|float|null $baseOrderQty = null,
        /**
         * Qty. on receipts > The quantity of the item that has been received according
         * to all receipts, including the unreleased ones.
         */
        public int|float|null $qtyOnReceipts = null,
        /** Unit cost > The cost per UoM of the stock item. */
        public int|float|null $unitCost = null,
        /**
         * Background calculation connected with the View base/View currency function in
         * the top part. Changes the values in Unit cost, Amount, Disc. unit cost and
         * Cost fields.
         */
        public int|float|null $unitCostInBaseCurrency = null,
        /**
         * Ext. cost > The extended cost of the item, which is the unit cost multiplied
         * by the quantity.
         */
        public int|float|null $extCost = null,
        /**
         * Discount percent > If the Supplier customer discounts functionality is
         * enabled in the Enable/disable functionalities (CS100000) window, the percent
         * of the discount that has been entered manually or calculated based on the
         * discount amount entered manually for this line item.
         */
        public int|float|null $discountPercent = null,
        /**
         * Discount amount > If the Supplier customer discounts functionality is enabled
         * in the Enable/disable functionalities (CS100000) window, the amount of the
         * discount that has been specified manually or calculated based on the discount
         * percent entered manually.
         */
        public int|float|null $discountAmount = null,
        /**
         * Manual discount > A check box that indicates (if selected) that the discount
         * has been applied manually.
         */
        public ?bool $manualDiscount = null,
        public ?DiscountCodeInPurchaseOrderLineDto $discountCode = null,
        /**
         * Amount > The amount calculated (after the discount has been taken) for the
         * item.
         */
        public int|float|null $amount = null,
        /** Received amt. > The amount received on this purchase order for this item. */
        public int|float|null $receivedAmt = null,
        /**
         * Alternate ID > The alternate ID used for this stock item-subitem pair by the
         * supplier.
         */
        public ?string $alternateId = null,
        /**
         * Min. receipt (%) > The minimum quantity of the item, expressed as a
         * percentage of the ordered quantity, that is required for the item to be
         * accepted at the warehouse if the Receipt action is Rejected.
         */
        public int|float|null $minReceipt = null,
        /**
         * Max. receipt (%) > The maximum quantity of the item, expressed as a
         * percentage of the ordered quantity, that is required for the item to be
         * accepted at the warehouse if the Receipt action is Rejected.
         */
        public int|float|null $maxReceipt = null,
        /**
         * Complete on (%) > The minimum percentage of the ordered quantity for the
         * stock item that must be received to complete the purchase order line (gets
         * the default value from the Threshold receipt (%) setting of the supplier in
         * the (AP303000) window).
         */
        public int|float|null $completeOn = null,
        /**
         * Receipt action > The action that should be perform when the ordered item is
         * received if its quantity is greater than the Max. receipt value or less than
         * the Min. receipt value calculated based on the line's ordered quantity.
         * Values: Reject, Accept but warn, Accept.
         */
        public ?PurchaseOrderLineReceiptActionEnum $receiptAction = null,
        public ?TaxCategoryInPurchaseOrderLineDto $taxCategory = null,
        public ?AccountInPurchaseOrderLineDto $account = null,
        public ?SubInPurchaseOrderLineDto $sub = null,
        public ?ProjectInPurchaseOrderLineDto $project = null,
        public ?ProjectTaskInPurchaseOrderLineDto $projectTask = null,
        /** Requested > The date when the item was requested. */
        public ?\Carbon\Carbon $requested = null,
        /** Promised > The date when the item's deliver was promised. */
        public ?\Carbon\Carbon $promised = null,
        /**
         * Completed > A check box that indicates (if selected) that the purchasing of
         * the item requested by this line of the purchase order has been completed.
         */
        public ?bool $completed = null,
        /**
         * Cancelled > A check box that indicates (if selected) that this line of the
         * purchase order has been cancelled.
         */
        public ?bool $canceled = null,
        /**
         * Order type > The order type this order is related to (for normal orders based
         * on blanket or standard orders).
         */
        public ?PurchaseOrderLineOrderTypeEnum $orderType = null,
        /**
         * Order no. > 	The reference number of the blanket or standard order (for
         * normal orders based on blanket or standard orders).
         */
        public ?string $orderNumber = null,
        /**
         * Table > Icon Notes > Pop-up window for providing any user-defined text
         * connected to the order.
         */
        public ?string $note = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr1 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr2 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr3 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr4 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr5 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec1 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec2 = null,
        /** A free custom colum of type int */
        public ?int $customInt1 = null,
        /** A free custom colum of type int */
        public ?int $customInt2 = null,
        /** A free custom colum of type DateTime - in UTC timezone */
        #[MapName('customDateTimeUTC1')]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
    ) {}
}
