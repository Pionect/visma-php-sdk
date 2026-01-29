<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerCreditNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerCreditNoteDtoFactory factory()
 */
class CustomerCreditNoteDto extends Model
{
    #[Property]
    public ?creditTermsInCustomerCreditNoteDto $creditTerms;

    /** The top part &gt; Due date* &gt; The date when payment for the document is due, in accordance with the credit terms. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $documentDueDate;

    /** The top part &gt; Cash discount date* &gt; The end date of the cash discount period, which the system calculates by using the credit terms. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $cashDiscountDate;

    /** The top part &gt; External reference &gt; The external reference used in AutoInvoice. */
    #[Property]
    public ?string $externalReference;

    /** The top part &gt; Domestic services deductible document &gt; A check box indicating if the document is Rot/rut deductible (applicable for the Swedish markets) */
    #[Property]
    public ?bool $isRotRutDeductible;

    /** The top part &gt; Currency &gt; The middle field, click the down arrow &gt; Exchange rate - To change the currency rate, click the arrow by the rate to invoke the Rate selection dialog box. */
    #[Property]
    public ?float $exchangeRate;

    /** The Financial details tab &gt; The Dunning information section &gt; Dunning letter date &gt; The date of the last released dunning letter in which the document was listed. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dunningLetterDate;

    /** The Financial details tab &gt; The Dunning information section &gt; Dunning level &gt; The dunning level of the document. */
    #[Property]
    public ?int $dunningLetterLevel;

    #[Property]
    public ?contactInCustomerCreditNoteDto $contact;

    #[Property]
    public ?array $attachments;

    #[Property]
    public ?array $taxDetails;

    #[Property]
    public ?array $lines;

    /** The top part &gt; Rounding diff. &gt; The difference between the original amount and the rounded amount. */
    #[Property]
    public ?float $roundingDiff;

    #[Property]
    public ?customerVatZoneInCustomerCreditNoteDto $customerVatZone;

    /** The Attachment tab &gt; Send the file to AutoInvoice &gt; The selected files will be attached to the invoice. */
    #[Property]
    public ?bool $sendToAutoInvoice;

    #[Property]
    public ?ChildRecordDto $childRecord;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    /** The top part &gt; Hold &gt; A check box that indicates (if selected) that the document is a draft. A document with the On Hold status may be edited and cannot be released. */
    #[Property]
    public ?bool $hold;

    /** The top part &gt; Discount total &gt; The document discount total. */
    #[Property]
    public ?float $discountTotal;

    /** The top part &gt; Discount total &gt; The document discount total in your default currency. This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $discountTotalInCurrency;

    /** The top part &gt; Detail total &gt; The document total, which the system calculates for all line items in the Document details tab. */
    #[Property]
    public ?float $detailTotal;

    /** Background calculation giving you the Detail total in your default currency. This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $detailTotalInCurrency;

    /** The top part &gt; VAT taxable total &gt; The document total that is subjected to VAT. */
    #[Property]
    public ?float $vatTaxableTotal;

    /** Background calculation giving you the VAT taxable total in your default currency. This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $vatTaxableTotalInCurrency;

    /** The top part &gt; VAT exempt. total &gt; The document total that is exempt from VAT. This total is calculated as the taxable amount for the tax with the Include in VAT Exempt Total check box selected on the Taxes form.This box is available only if the VAT Reporting feature is enabled in your system. */
    #[Property]
    public ?float $vatExemptTotal;

    /** Background calculation giving you the VAT exempt. total in your default currency. This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $vatExemptTotalInCurrency;

    /** The field is deprecated for customer document endpoints, please use SalesPerson instead */
    #[Property]
    public ?int $salesPersonId;

    /** The field is deprecated for customer document endpoints, please use SalesPerson instead */
    #[Property]
    public ?string $salesPersonDescr;

    #[Property]
    public ?salesPersonInCustomerCreditNoteDto $salesPerson;

    /** ///The top part &gt; Payment ref. &gt; The reference number of the document, as automatically generated by the system in accordance with the number series assigned to cash sales in the Customer ledger preferences window.. */
    #[Property]
    public ?string $paymentReference;

    #[Property]
    public ?invoiceAddressInCustomerCreditNoteDto $invoiceAddress;

    #[Property]
    public ?invoiceContactInCustomerCreditNoteDto $invoiceContact;

    #[Property]
    public ?array $applications;

    #[Property]
    public ?bool $dontPrint;

    #[Property]
    public ?bool $dontEmail;

    #[Property]
    public ?bool $revoked;

    #[Property]
    public ?customerInCustomerCreditNoteDto $customer;

    /** The top part &gt; Type &gt; The document type. The following types are available: invoice, debit note, credit note, overdue charge, credit write-off */
    #[Property]
    public ?string $documentType;

    /** The Top part &gt; Ref. no. &gt; The reference number of the customer ledger document in the system. */
    #[Property]
    public ?string $referenceNumber;

    /** The top part &gt; Post period &gt; The period to which the document should be posted. Format YYYYMM. */
    #[Property]
    public ?string $postPeriod;

    /** The financial period to which the transactions recorded in the document should be posted. Format YYYYMM. */
    #[Property]
    public ?string $financialPeriod;

    /** Format YYYYMM. */
    #[Property]
    public ?string $closedFinancialPeriod;

    /**
     * The top part &gt; Date* &gt; The date when the customer ledger document was created.
     * By default, for a new document, it is the current business date, but you can change the date.
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $documentDate;

    /**
     * The top part &gt; Orig invoice date &gt; The date based on which the Due date and Cash discount date is calculated. Only used if setting "Use Orig Invoice Date" is active in AR Preferences.
     * By default, for a new document, it is the current business date, but you can change the date.
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $origInvoiceDate;

    /** The top part &gt; Status &gt; The status of the document, which can be one of the following: Hold, Balanced, Voided, Scheduled, Open, Closed, Pending print, Pending email. */
    #[Property]
    public ?string $status;

    /** The top part &gt; Currency &gt; The currency of the document. By default, it is the customer’s default currency,but it can be changed if the Allow Currency Override check box is selected in the AR303000 window. */
    #[Property]
    public ?string $currencyId;

    /**
     * The top part &gt; Amount &gt; The amount paid by the document. The value appears for new documents if the Validate document totals on entry check box is selected on the AR101000 window.
     * If the check box is cleared, then the value appears when the document status is Open.
     */
    #[Property]
    public ?float $amount;

    /** Background calculation giving you the Amount in your default currency. This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $amountInCurrency;

    /**
     * The top part &gt; Balance &gt; For an open customer ledger document, the balance after any cash discount was taken.
     * For a document used in the application process, this is the balance after the payments were applied.
     */
    #[Property]
    public ?float $balance;

    /** Background calculation giving you the Balance in your default currency. This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $balanceInCurrency;

    /** The top part &gt; Cash discount &gt; The cash discount amount that has been or will be taken on the document, which the system calculates based on the specified credit terms. */
    #[Property]
    public ?float $cashDiscount;

    /** Background calculation giving you the Cash discount in your default currency. This field is applicable if the amount is given in another currency than your default. */
    #[Property]
    public ?float $cashDiscountInCurrency;

    #[Property]
    public ?paymentMethodInCustomerCreditNoteDto $paymentMethod;

    /** The top part &gt; External reference &gt; The external reference used in AutoInvoice. */
    #[Property]
    public ?string $customerRefNumber;

    /** The top part &gt; Invoice text &gt; Any user-provided description of the customer ledger document. */
    #[Property]
    public ?string $invoiceText;

    /** System generated field for last modification date/time of document. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** The Attachments tab &gt; Creation time &gt; The date the attachment was created. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    /** Icon Notes on top of the window &gt; Pop-up window for providing any user-defined text connected to the document. */
    #[Property]
    public ?string $note;

    /** The top part &gt; VAT total &gt; The VAT amount of the document, as defined on the VAT details tab. */
    #[Property]
    public ?float $vatTotal;

    /** Background calculation giving you the VAT total in your default currency. This field is applicable if the amount is given in a another currency than your default. */
    #[Property]
    public ?float $vatTotalInCurrency;

    #[Property]
    public ?locationInCustomerCreditNoteDto $location;

    #[Property]
    public ?branchNumberInCustomerCreditNoteDto $branchNumber;

    /** Financial details tab &gt; The payment information section &gt; Cash account &gt; The cash account associated with the payment method. */
    #[Property]
    public ?string $cashAccount;

    #[Property]
    public ?projectInCustomerCreditNoteDto $project;

    #[Property]
    public ?accountInCustomerCreditNoteDto $account;

    #[Property]
    public ?subaccountInCustomerCreditNoteDto $subaccount;

    /** The top part &gt; Customer project no. &gt; The customer project no. used in AutoInvoice. */
    #[Property]
    public ?string $customerProject;

    #[Property]
    public ?string $errorInfo;
}
