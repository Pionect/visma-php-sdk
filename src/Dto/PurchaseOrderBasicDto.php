<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Order in PurchaseOrderController. Used for getting data.
 */
class PurchaseOrderBasicDto extends Model
{
    /** The top part &gt; Type &gt; The type of the purchase order, which can be one of these options: Normal, Drop-ship, Blanket, Default */
    #[Property]
    public ?string $orderType;

    /** The top part &gt; Order no. &gt; The unique reference number of the purchase order, which the system assigns based on the number series assigned to purchase orders of this type, as specified in the PO101000 window. */
    #[Property]
    public ?string $orderNbr;

    /** The top part &gt; Hold &gt; A check box that you select to give the purchase order the On hold status. */
    #[Property]
    public ?bool $hold;

    /** The top part &gt; Status &gt; The system-generated status of the purchase order, which can be one of the following options: On hold, Open, Pending approval, Rejected, Pending printing, Pending e-mail, Closed, Cancelled. */
    #[Property]
    public ?string $status;

    /** Mandatory field: The top part &gt; Date* &gt; The date when the purchase order was created. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** The top part &gt; Delivery date &gt; The date when the supplier promised that the items listed in the order will be received at their destination location. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $promisedOn;

    /** The top part &gt; Description &gt; A brief description of the purchase order. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?\supplierInPurchaseOrderBasicDto $supplier;

    #[Property]
    public ?\locationInPurchaseOrderBasicDto $location;

    #[Property]
    public ?\ownerInPurchaseOrderBasicDto $owner;

    /** The top part &gt; Currency &gt; The currency the purchase order will be paid in. */
    #[Property]
    public ?string $currency;

    /** The top part &gt; Supplier ref. &gt; The reference number of the supplier document related to this purchase order. */
    #[Property]
    public ?string $supplierRef;

    #[Property]
    public ?float $exchangeRate;

    /** The top part &gt; Line total &gt; The total sum of the Extended amount entries for all lines in the current purchase order. This value is calculated by the system and users cannot manually change it. */
    #[Property]
    public ?float $lineTotal;

    /** The top part &gt; View base &gt; A button that recalculates the Line total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. */
    #[Property]
    public ?float $lineTotalInBaseCurrency;

    /** The Top part &gt; VAT exempt total &gt; The document total that is exempt from VAT. This total is calculated as the taxable amount for the VAT with the Include in VAT exempt total check box selected in the TX205000 window. */
    #[Property]
    public ?float $vatExemptTotal;

    /** The top part &gt; View base &gt; A button that recalculates the VAT exempt total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. */
    #[Property]
    public ?float $vatExemptTotalInBaseCurrency;

    /** The Top part &gt; VAT total &gt; The total VAT amount for all lines added to the current purchase order. This value, also calculated by the system, is the sum of the VAT amounts for each line. */
    #[Property]
    public ?float $taxTotal;

    /** The top part &gt; View base &gt; A button that recalculates the VAT total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. */
    #[Property]
    public ?float $taxTotalInBaseCurrency;

    /** The Top part &gt; Order total &gt; The total sum for the purchase order, including VAT. This read-only value is the sum of the Line total and VAT total values. */
    #[Property]
    public ?float $orderTotal;

    /** The top part &gt; View base &gt; A button that recalculates the Order total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. */
    #[Property]
    public ?float $orderTotalInBaseCurrency;

    /** The top part &gt; Control total &gt; The order's total amount (including VAT), which you must enter manually when you attempt to save the order with the Balanced status. */
    #[Property]
    public ?float $controlTotal;

    /** The top part &gt; View base &gt; A button that recalculates the Control total to your base currency if the amount on the purchase order is in another currency then base currency. When you click the button, the button toggles to View currency. */
    #[Property]
    public ?float $controlTotalInBaseCurrency;

    #[Property]
    public ?\branchInPurchaseOrderBasicDto $branch;

    /** Document details tab &gt; The table &gt; */
    #[Property]
    public ?array $lines;

    /** VAT details tab &gt; */
    #[Property]
    public ?array $taxDetails;

    /** Purchase receipts tab &gt; */
    #[Property]
    public ?array $purchaseReceipts;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Icon Notes on top of the window &gt; Pop-up window for providing any user-defined text connected to the document. */
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

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
