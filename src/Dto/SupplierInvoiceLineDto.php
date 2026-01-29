<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierInvoiceLineDto extends Model
{
    /** The table &gt; Number at the left indicating the line number of the table. */
    #[Property]
    public ?int $lineNumber;

    /** The table &gt; Item ID &gt; The unique ID of the particular item or service delivered by the supplier. */
    #[Property]
    public ?string $inventoryNumber;

    /** The table &gt; External inventory id &gt; External inventory number */
    #[Property]
    public ?string $externalInventoryId;

    /** Background information indicating whether the item is a stock item or not. */
    #[Property]
    public ?bool $stockItem;

    /** The table &gt; Transaction descr. &gt; Any description relevant to the transaction. An alphanumeric string of up to 30 characters may be used. */
    #[Property]
    public ?string $transactionDescription;

    /** The table &gt; Quantity &gt; The quantity of the item or service to be delivered by the supplier. */
    #[Property]
    public ?float $quantity;

    /** The table &gt; UoM &gt; The unit of measure for the item. */
    #[Property]
    public ?string $uom;

    /** The table &gt; Unit cost &gt; The unit cost of the item. */
    #[Property]
    public ?float $unitCost;

    /** Background calculation giving you the Unit cost in the selected currency.This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $unitCostInCurrency;

    /** The table &gt; Cost &gt; The unit cost of the item or service received from the supplier. */
    #[Property]
    public ?float $cost;

    /** Background calculation giving you the Cost in the selected currency.This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $costInCurrency;

    /** The table &gt; Discount percent &gt; The percent of the line-level discount that has been applied manually or automatically. */
    #[Property]
    public ?float $discountPercent;

    /** The table &gt; Discount amount &gt; The amount of the line-level discount that has been applied manually or automatically to this line. */
    #[Property]
    public ?float $discountAmount;

    /** Background calculation giving you the Discount amount in the selected currency.This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $discountAmountInCurrency;

    /** Background calculation giving you the Discount unit cost in the default currency. */
    #[Property]
    public ?float $discountUnitCost;

    /** Background calculation giving you the Discount unit cost in the selected currency.This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $discountUnitCostInCurrency;

    /** The table &gt; Manual discount &gt; A check box that indicates (if selected) that the discount has been applied manually. */
    #[Property]
    public ?bool $manualDiscount;

    #[Property]
    public ?accountInSupplierInvoiceLineDto $account;

    #[Property]
    public ?subaccountInSupplierInvoiceLineDto $subaccount;

    #[Property]
    public ?prebookAccountInSupplierInvoiceLineDto $prebookAccount;

    #[Property]
    public ?prebookSubaccountInSupplierInvoiceLineDto $prebookSubaccount;

    /** The table &gt; Original deferral schedule &gt; A read-only column filled in by the system in the Debit adjustment documents created by the reversing process.It shows the ID of the deferral schedule associated with the original document (such as a purchase invoice). */
    #[Property]
    public ?int $deferralSchedule;

    /** The public CD/Code of the deferral schedule visible to user */
    #[Property]
    public ?string $deferralScheduleNbr;

    /** The table &gt; Deferral code &gt; The deferral code assigned to the stock item or non-stock item specified in this document line. */
    #[Property]
    public ?string $deferralCode;

    #[Property]
    public ?vatCodeInSupplierInvoiceLineDto $vatCode;

    /** The table &gt; Purchase order number &gt; The number of the purchase order linked to this line of the invoice. */
    #[Property]
    public ?string $poNumber;

    /** The table &gt; Purchase order line &gt; The line number of the purchase order line linked to this line of the invoice. */
    #[Property]
    public ?int $poLineNr;

    /** The table &gt; Purchase order receipt no. &gt; The number of the purchase receipt linked to this line of the invoice. */
    #[Property]
    public ?string $poReceiptNbr;

    /** The table &gt; Purchase order receipt line &gt; The line number of the purchase receipt's line that is linked to this line of the invoice. */
    #[Property]
    public ?int $poReceiptLineNbr;

    #[Property]
    public ?branchNumberInSupplierInvoiceLineDto $branchNumber;

    /** The table &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected with to invoice. */
    #[Property]
    public ?string $note;

    /** The table &gt; Split hierarchy &gt; The number of the original row that has been split. */
    #[Property]
    public ?string $splitHierarchy;

    #[Property]
    public ?projectInSupplierInvoiceLineDto $project;

    #[Property]
    public ?projectTaskInSupplierInvoiceLineDto $projectTask;

    /** The data containing information about the document attachments */
    #[Property]
    public ?array $attachments;

    #[Property]
    public ?float $retainagePct;

    #[Property]
    public ?float $curyRetainageAmt;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termStartDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termEndDate;
}
