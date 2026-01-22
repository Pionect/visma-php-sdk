<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerCreditWriteOffDto extends Model
{
    /** The top part &gt; Hold &gt; A check box that indicates if the document is a draft. A document with the On Hold status may be edited and cannot be released. */
    #[Property]
    public ?bool $hold;

    /** The top part &gt; Rounding diff. &gt; The difference between the original amount and the rounded amount. */
    #[Property]
    public ?float $roundingDiff;

    #[Property]
    public ?\customerVatZoneInCustomerCreditWriteOffDto $customerVatZone;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?\customerInCustomerCreditWriteOffDto $customer;

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
    public ?\paymentMethodInCustomerCreditWriteOffDto $paymentMethod;

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
    public ?\locationInCustomerCreditWriteOffDto $location;

    #[Property]
    public ?\branchNumberInCustomerCreditWriteOffDto $branchNumber;

    /** Financial details tab &gt; The payment information section &gt; Cash account &gt; The cash account associated with the payment method. */
    #[Property]
    public ?string $cashAccount;

    #[Property]
    public ?\projectInCustomerCreditWriteOffDto $project;

    #[Property]
    public ?\accountInCustomerCreditWriteOffDto $account;

    #[Property]
    public ?\subaccountInCustomerCreditWriteOffDto $subaccount;

    /** The top part &gt; Customer project no. &gt; The customer project no. used in AutoInvoice. */
    #[Property]
    public ?string $customerProject;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
