<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Order Line in PurchaseReceiptContraoller. Used for getting data.
 */
class PurchaseReceiptLineDto extends Model
{
    #[Property]
    public ?array $allocations;

    #[Property]
    public ?string $note;

    /** Document details tab &gt; Base receipt qty. &gt; The quantity of the item received in the base unit of measure. */
    #[Property]
    public ?float $baseReceiptQty;

    /** The line number */
    #[Property]
    public ?int $lineNbr;

    #[Property]
    public ?branchInPurchaseReceiptLineDto $branch;

    #[Property]
    public ?branchNumberInPurchaseReceiptLineDto $branchNumber;

    #[Property]
    public ?InventoryNumberDescriptionDto $inventory;

    /** Document details tab &gt; Line type &gt; The type of the purchase order line. */
    #[Property]
    public ?string $lineType;

    #[Property]
    public ?warehouseInPurchaseReceiptLineDto $warehouse;

    #[Property]
    public ?locationInPurchaseReceiptLineDto $location;

    /** Document details tab &gt; Transaction descr. &gt; The description of the receipt or return transaction. */
    #[Property]
    public ?string $transactionDescription;

    /** Document details tab &gt; UoM &gt; The unit of measure (UoM) used for the purchased or transferred item. */
    #[Property]
    public ?string $uom;

    /** Document details tab &gt; Ordered qty.  &gt; The quantity of the purchased item (in the specified UoM). */
    #[Property]
    public ?float $orderQty;

    /** Document details tab &gt; Open qty. &gt; The quantity of the stock item yet to be received on the purchase order. */
    #[Property]
    public ?float $openQty;

    /** Document details tab &gt; Receipts qty. &gt; 	The quantity of the item (with the specified subitem code) in the specified UoM that has been received (listed on released receipts). */
    #[Property]
    public ?float $receiptQty;

    /** Document details tab &gt; Unit cost &gt; The cost of a unit of the purchased item. */
    #[Property]
    public ?float $unitCost;

    /** Document details tab &gt; Cost &gt; The cost of the item, which is the unit price multiplied by the quantity. */
    #[Property]
    public ?float $extCost;

    /** Document details tab &gt; Discount percent &gt; If the Supplier and customer discounts functionality is enabled, the percent of the discount that has been entered manually or calculated based on the discount amount entered manually for this line item. */
    #[Property]
    public ?float $discountPercent;

    /** Document details tab &gt; Discount amount &gt; If the Supplier and customer discounts functionality is enabled, the amount of the discount that has been specified manually or calculated based on the discount percent entered manually. */
    #[Property]
    public ?float $discountAmount;

    /** Document details tab &gt; Manual discount &gt; A check box that indicates (if selected) that the discount has been applied manually. */
    #[Property]
    public ?bool $manualDiscount;

    #[Property]
    public ?discountCodeInPurchaseReceiptLineDto $discountCode;

    /** Document details tab &gt; Amount &gt; The amount calculated (after discount has been taken) for the item. */
    #[Property]
    public ?float $amount;

    #[Property]
    public ?taxCategoryInPurchaseReceiptLineDto $taxCategory;

    #[Property]
    public ?accountInPurchaseReceiptLineDto $account;

    /** Document details tab &gt; Description &gt; The description of this account. */
    #[Property]
    public ?string $accountDescription;

    #[Property]
    public ?subInPurchaseReceiptLineDto $sub;

    #[Property]
    public ?actualAccountInPurchaseReceiptLineDto $actualAccount;

    #[Property]
    public ?actualSubInPurchaseReceiptLineDto $actualSub;

    #[Property]
    public ?projectInPurchaseReceiptLineDto $project;

    #[Property]
    public ?projectTaskInPurchaseReceiptLineDto $projectTask;

    /** Document details tab &gt; Expiration date &gt; The expiration date of the received item. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** Document details tab &gt; Lot/serial no. &gt; The lot or serial number assigned to the received quantity of the purchased item. */
    #[Property]
    public ?string $lotSerialNumber;

    /** Document details tab &gt; Purchase order type &gt; The type of the purchase order related to this purchase receipt. */
    #[Property]
    public ?string $poOrderType;

    /** Document details tab &gt; Purchase order no. &gt; The reference number of the purchase order related to this purchase receipt. */
    #[Property]
    public ?string $poOrderNbr;

    /** Document details tab &gt; Purchase order line no. &gt; The line number of the purchase order related to this line of the purchase receipt. */
    #[Property]
    public ?int $poOrderLineNbr;

    /** Document details tab &gt; Transfer order type &gt; The type of the transfer order to which this receipt is linked. */
    #[Property]
    public ?string $transferOrderType;

    /** Document details tab &gt; Transfer order no. &gt; The reference number of the transfer order to which this receipt is linked. */
    #[Property]
    public ?string $transferOrderNbr;

    /** Document details tab &gt; Transfer line no &gt; The line number in the transfer order to which this receipt is linked. */
    #[Property]
    public ?int $transferOrderLineNbr;

    /** Document details tab &gt; Complelete purchase line &gt; A check box that indicates to the system (if selected) that the purchase order line added to this receipt line should be considered completed upon release of this purchase receipt. */
    #[Property]
    public ?bool $completePoLine;

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
