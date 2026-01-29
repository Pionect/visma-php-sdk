<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a ApInvoice in SupplierInvoiceController. Used by getting data.
 */
class SupplierInvoiceDto extends Model
{
    /** The VAT details tab &gt; */
    #[Property]
    public ?array $taxDetailLines;

    #[Property]
    public ?array $attachments;

    #[Property]
    public ?approvalDetailsInSupplierInvoiceDto $approvalDetails;

    /** Transaction lines */
    #[Property]
    public ?array $invoiceLines;

    /** The Landed cost lines tab &gt; */
    #[Property]
    public ?array $landedCosts;

    /** The Top part &gt; Hold &gt; A check box that indicates that the status of the supplier ledger document is On hold. */
    #[Property]
    public ?bool $hold;

    /** The Top part &gt; Currency &gt; The currency of the document. */
    #[Property]
    public ?float $exchangeRate;

    /** The Top part &gt; Payment ref.no &gt; The payment reference number of the document. */
    #[Property]
    public ?string $paymentRefNo;

    #[Property]
    public ?creditTermsInSupplierInvoiceDto $creditTerms;

    /** The Top part &gt; Apply retainage &gt; A check box that indicates (if selected) that this invoice is an invoice with retainage. */
    #[Property]
    public ?bool $retainageApply;

    /** The Top part &gt; Cash discount date &gt; The end date of the cash discount period, which the system calculates by using the supplier's credit terms. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $cashDiscountDate;

    /** The Top part &gt; Detail total &gt; The document total as specified in the Document details tab. */
    #[Property]
    public ?float $detailTotal;

    /** Background calculation giving you the Detail total in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $detailTotalInCurrency;

    /** The Top part &gt; Discount total &gt; The discount total calculated for the document. This total includes discounts of the Group and Document levels. */
    #[Property]
    public ?float $discountTotal;

    /** Background calculation giving you the Discount total in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $discountTotalInCurrency;

    /** The Top part &gt; VAT taxable total &gt; The document total that is subjected to VAT. */
    #[Property]
    public ?float $vatTaxableTotal;

    /** Background calculation giving you the VAT taxable total in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $vatTaxableTotalInCurrency;

    /** The Top part &gt; VAT exempt total &gt; The document total that is exempt from VAT. */
    #[Property]
    public ?float $vatExemptTotal;

    /** Background calculation giving you the VAT exempt total in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $vatExemptTotalInCurrency;

    /** The Top part &gt; With. tax &gt; The amount of withholding tax calculated for the document, if applicable. */
    #[Property]
    public ?float $withholdingTax;

    /** Background calculation giving you the With. tax in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $withholdingTaxInCurrency;

    /** The Top part &gt; Supplier ref. &gt; The document's original reference number as assigned by the supplier (for informational purposes). */
    #[Property]
    public ?string $buyerReference;

    /** The Top part &gt; Rounding diff. &gt; The difference between the original invoice amount (including the VAT amount calculated by the system) and rounded invoice amount (including the VAT amount modified by a user for VAT-inclusive items). */
    #[Property]
    public ?float $roundingDiff;

    /** Background calculation giving you the Rounding diff. in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $roundingDiffInCurrency;

    /** The Top part &gt; Amount &gt; The amount to be paid for the document. Equal to the amount (or to the sum of amounts) shown in the Amount column of the Document details tab. */
    #[Property]
    public ?float $amount;

    /** The Top part &gt; VAT amount &gt; The VAT amount to be paid for the document. Enter this amount manually according to the VAT amount specified in the original document. */
    #[Property]
    public ?float $vatAmount;

    /** The Financial details tab &gt; The VAT section &gt; VAT calculation mode &gt; The VAT calculation mode, which defines which amounts (VAT-inclusive or VAT-exclusive) should be entered in the detail lines of a document (TaxSetting, Gross, Net) */
    #[Property]
    public ?string $taxCalculationMode;

    #[Property]
    public ?supplierTaxZoneInSupplierInvoiceDto $supplierTaxZone;

    /** The Financial details tab &gt; The Payment information section &gt; Approved for payment &gt; When set to true indicates that the document is approved for payment. */
    #[Property]
    public ?bool $paySelected;

    #[Property]
    public ?float $curyRetainageTotal;

    #[Property]
    public ?float $curyRetainageUnreleasedAmt;

    #[Property]
    public ?int $documentVersionNumber;

    #[Property]
    public ?supplierInSupplierInvoiceDto $supplier;

    /** The top part &gt; Top part &gt; Type &gt; The type of the document. The following types are available: Purchase invoice, credit adjustment, purchase credit note, prepayment. */
    #[Property]
    public ?string $documentType;

    #[Property]
    public ?string $referenceNumber;

    /** The Top part &gt; Post period* &gt; The post period of the payment document. Format MMYYYY. */
    #[Property]
    public ?string $postPeriod;

    /** The financial period to which the transactions recorded in the document should be posted. Format YYYYMM. */
    #[Property]
    public ?string $financialPeriod;

    /** The Top part &gt; Date* &gt; The date of the original supplier ledger document; by default, it is the current date, which can be changed. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** The Top part &gt; OrigInvoiceDate* &gt; The original invoice date of the original supplier ledger document; by default, it is the current date, which can be changed. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $origInvoiceDate;

    /** The Top part &gt; Due date* &gt; The date when payment for the document is due in accordance with the supplier's credit terms. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    /** The Top part &gt; Approval status &gt; The status of the document in Visma.net Approval. [New, Canceled, SentToApproval, ReceivedByApproval, InProgressApproval, RejectedInApproval, ApprovedInApproval, ActiveWorkflowApproval. */
    #[Property]
    public ?string $approvalStatus;

    /** The Top part &gt; Document status &gt; A read-only field that shows the status of the supplier ledger document:[Hold, Balanced, Voided, Scheduled, Open, Closed, Printed, Prebooked, Reserved] */
    #[Property]
    public ?string $status;

    /** The Top part &gt; Currency &gt; The currency of the document. */
    #[Property]
    public ?string $currencyId;

    /** The Top part &gt; Balance &gt; The balance of the supplier ledger document after VAT (if inclusive) and the discount as specified in the tabs below. */
    #[Property]
    public ?float $balance;

    /** Background calculation giving you the Balance in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $balanceInCurrency;

    /** The Top part &gt; Cash discount &gt; The cash discount amount that has been or will be taken in the document, which the system calculates based in the specified credit terms. */
    #[Property]
    public ?float $cashDiscount;

    /** Background calculation giving you the Cash discount in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $cashDiscountInCurrency;

    #[Property]
    public ?paymentMethodInSupplierInvoiceDto $paymentMethod;

    /** The Top part &gt; Supplier ref. &gt; The document's original reference number as assigned by the supplier (for informational purposes). */
    #[Property]
    public ?string $supplierReference;

    /** The Top part &gt; Description &gt; A user-provided description for this supplier ledger document. */
    #[Property]
    public ?string $description;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** The table &gt; Document details tab and Applications tab &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected with to invoice. */
    #[Property]
    public ?string $note;

    /** Format YYYYMM. */
    #[Property]
    public ?string $closedFinancialPeriod;

    #[Property]
    public ?locationInSupplierInvoiceDto $location;

    /** The Top part &gt; VAT total &gt; The total amount of tax paid in the document. */
    #[Property]
    public ?float $vatTotal;

    /** Background calculation giving you the VAT total in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $vatTotalInCurrency;

    #[Property]
    public ?BranchNumberDto $branchNumber;

    /** The Financial details tab &gt; The Payment information section &gt; Pay date* &gt; The date when the invoice should be paid. The date is the difference between the document due date or discount date and the number of days specified in the Payment lead time field in AP303000. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $payDate;

    /** The Financial details tab &gt; The Payment information section &gt; Payment message &gt; The message connected with the payment. */
    #[Property]
    public ?string $paymentMessage;

    /** Financial details tab &gt; The payment information section &gt; Cash account &gt; The cash account associated with the payment method. */
    #[Property]
    public ?string $cashAccount;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
