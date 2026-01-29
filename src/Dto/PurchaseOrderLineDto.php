<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Order Line in PurchaseOrderController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderLineDtoFactory factory()
 */
class PurchaseOrderLineDto extends Model
{
    /** The line number */
    #[Property]
    public ?int $lineNbr;

    #[Property]
    public ?branchInPurchaseOrderLineDto $branch;

    #[Property]
    public ?inventoryInPurchaseOrderLineDto $inventory;

    /** Line type &gt; 	The type of the order line, which can be one of the following options: Goods for inventory, Non-stock, Service, Freight, Good for sales order, Non-stock for drop-ship, Drop-ship, Goods for RP, Description. */
    #[Property]
    public ?string $lineType;

    #[Property]
    public ?warehouseInPurchaseOrderLineDto $warehouse;

    /** A description of the order line, which is copied from the item's description. */
    #[Property]
    public ?string $lineDescription;

    /** UoM &gt; The unit of measure (UoM) in which the quantity of the item is specified. */
    #[Property]
    public ?string $uom;

    /** Order qty. &gt; The quantity of the item that has been ordered. */
    #[Property]
    public ?float $orderQty;

    /** Base Order qty. &gt; The base quantity of the item that has been ordered. */
    #[Property]
    public ?float $baseOrderQty;

    /** Qty. on receipts &gt; The quantity of the item that has been received according to all receipts, including the unreleased ones. */
    #[Property]
    public ?float $qtyOnReceipts;

    /** Unit cost &gt; The cost per UoM of the stock item. */
    #[Property]
    public ?float $unitCost;

    /** Background calculation connected with the View base/View currency function in the top part. Changes the values in Unit cost, Amount, Disc. unit cost and Cost fields. */
    #[Property]
    public ?float $unitCostInBaseCurrency;

    /** Ext. cost &gt; The extended cost of the item, which is the unit cost multiplied by the quantity. */
    #[Property]
    public ?float $extCost;

    /** Discount percent &gt; If the Supplier customer discounts functionality is enabled in the Enable/disable functionalities (CS100000) window, the percent of the discount that has been entered manually or calculated based on the discount amount entered manually for this line item. */
    #[Property]
    public ?float $discountPercent;

    /** Discount amount &gt; If the Supplier customer discounts functionality is enabled in the Enable/disable functionalities (CS100000) window, the amount of the discount that has been specified manually or calculated based on the discount percent entered manually. */
    #[Property]
    public ?float $discountAmount;

    /** Manual discount &gt; A check box that indicates (if selected) that the discount has been applied manually. */
    #[Property]
    public ?bool $manualDiscount;

    #[Property]
    public ?discountCodeInPurchaseOrderLineDto $discountCode;

    /** Amount &gt; The amount calculated (after the discount has been taken) for the item. */
    #[Property]
    public ?float $amount;

    /** Received amt. &gt; The amount received on this purchase order for this item. */
    #[Property]
    public ?float $receivedAmt;

    /** Alternate ID &gt; The alternate ID used for this stock item-subitem pair by the supplier. */
    #[Property]
    public ?string $alternateId;

    /** Min. receipt (%) &gt; The minimum quantity of the item, expressed as a percentage of the ordered quantity, that is required for the item to be accepted at the warehouse if the Receipt action is Rejected. */
    #[Property]
    public ?float $minReceipt;

    /** Max. receipt (%) &gt; The maximum quantity of the item, expressed as a percentage of the ordered quantity, that is required for the item to be accepted at the warehouse if the Receipt action is Rejected. */
    #[Property]
    public ?float $maxReceipt;

    /** Complete on (%) &gt; The minimum percentage of the ordered quantity for the stock item that must be received to complete the purchase order line (gets the default value from the Threshold receipt (%) setting of the supplier in the (AP303000) window). */
    #[Property]
    public ?float $completeOn;

    /** Receipt action &gt; The action that should be perform when the ordered item is received if its quantity is greater than the Max. receipt value or less than the Min. receipt value calculated based on the line's ordered quantity. Values: Reject, Accept but warn, Accept. */
    #[Property]
    public ?string $receiptAction;

    #[Property]
    public ?taxCategoryInPurchaseOrderLineDto $taxCategory;

    #[Property]
    public ?accountInPurchaseOrderLineDto $account;

    #[Property]
    public ?subInPurchaseOrderLineDto $sub;

    #[Property]
    public ?projectInPurchaseOrderLineDto $project;

    #[Property]
    public ?projectTaskInPurchaseOrderLineDto $projectTask;

    /** Requested &gt; The date when the item was requested. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $requested;

    /** Promised &gt; The date when the item's deliver was promised. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $promised;

    /** Completed &gt; A check box that indicates (if selected) that the purchasing of the item requested by this line of the purchase order has been completed. */
    #[Property]
    public ?bool $completed;

    /** Cancelled &gt; A check box that indicates (if selected) that this line of the purchase order has been cancelled. */
    #[Property]
    public ?bool $canceled;

    /** Order type &gt; The order type this order is related to (for normal orders based on blanket or standard orders). */
    #[Property]
    public ?string $orderType;

    /** Order no. &gt; 	The reference number of the blanket or standard order (for normal orders based on blanket or standard orders). */
    #[Property]
    public ?string $orderNumber;

    /** Table &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected to the order. */
    #[Property]
    public ?string $note;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr1;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr2;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr3;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr4;

    /** A free custom colum of type string with max length 100. */
    #[Property]
    public ?string $customStr5;

    /** A free custom colum of type decimal with max 4 decimals. */
    #[Property]
    public ?float $customDec1;

    /** A free custom colum of type decimal with max 4 decimals. */
    #[Property]
    public ?float $customDec2;

    /** A free custom colum of type int */
    #[Property]
    public ?int $customInt1;

    /** A free custom colum of type int */
    #[Property]
    public ?int $customInt2;

    /** A free custom colum of type DateTime - in UTC timezone */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $customDateTimeUtc1;
}
