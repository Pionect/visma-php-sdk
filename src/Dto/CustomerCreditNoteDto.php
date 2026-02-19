<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\CashSaleStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerCreditNoteDtoFactory testFactory()
 */
class CustomerCreditNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?CreditTermsInCustomerCreditNoteDto $creditTerms = null,
        /**
         * The top part > Due date* > The date when payment for the document is due, in
         * accordance with the credit terms.
         */
        public ?\Carbon\Carbon $documentDueDate = null,
        /**
         * The top part > Cash discount date* > The end date of the cash discount
         * period, which the system calculates by using the credit terms.
         */
        public ?\Carbon\Carbon $cashDiscountDate = null,
        /**
         * The top part > External reference > The external reference used in
         * AutoInvoice.
         */
        public ?string $externalReference = null,
        /**
         * The top part > Domestic services deductible document > A check box indicating
         * if the document is Rot/rut deductible (applicable for the Swedish markets)
         */
        public ?bool $isRotRutDeductible = null,
        /**
         * The top part > Currency > The middle field, click the down arrow > Exchange
         * rate - To change the currency rate, click the arrow by the rate to invoke the
         * Rate selection dialog box.
         */
        public int|float|null $exchangeRate = null,
        /**
         * The Financial details tab > The Dunning information section > Dunning letter
         * date > The date of the last released dunning letter in which the document was
         * listed.
         */
        public ?\Carbon\Carbon $dunningLetterDate = null,
        /**
         * The Financial details tab > The Dunning information section > Dunning level >
         * The dunning level of the document.
         */
        public ?int $dunningLetterLevel = null,
        public ?ContactInCustomerCreditNoteDto $contact = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        /** @var TaxDetailDto[]|null */
        public ?array $taxDetails = null,
        /** @var CustomerCreditNoteLineDto[]|null */
        public ?array $lines = null,
        /**
         * The top part > Rounding diff. > The difference between the original amount
         * and the rounded amount.
         */
        public int|float|null $roundingDiff = null,
        public ?CustomerVatZoneInCustomerCreditNoteDto $customerVatZone = null,
        /**
         * The Attachment tab > Send the file to AutoInvoice > The selected files will
         * be attached to the invoice.
         */
        public ?bool $sendToAutoInvoice = null,
        public ?ChildRecordDto $childRecord = null,
        public ?string $timeStamp = null,
        /**
         * The top part > Hold > A check box that indicates (if selected) that the
         * document is a draft. A document with the On Hold status may be edited and
         * cannot be released.
         */
        public ?bool $hold = null,
        /** The top part > Discount total > The document discount total. */
        public int|float|null $discountTotal = null,
        /**
         * The top part > Discount total > The document discount total in your default
         * currency. This field is applicable if the amount is given in a another
         * currency than your default.
         */
        public int|float|null $discountTotalInCurrency = null,
        /**
         * The top part > Detail total > The document total, which the system calculates
         * for all line items in the Document details tab.
         */
        public int|float|null $detailTotal = null,
        /**
         * Background calculation giving you the Detail total in your default currency.
         * This field is applicable if the amount is given in a another currency than
         * your default.
         */
        public int|float|null $detailTotalInCurrency = null,
        /**
         * The top part > VAT taxable total > The document total that is subjected to
         * VAT.
         */
        public int|float|null $vatTaxableTotal = null,
        /**
         * Background calculation giving you the VAT taxable total in your default
         * currency. This field is applicable if the amount is given in a another
         * currency than your default.
         */
        public int|float|null $vatTaxableTotalInCurrency = null,
        /**
         * The top part > VAT exempt. total > The document total that is exempt from
         * VAT. This total is calculated as the taxable amount for the tax with the
         * Include in VAT Exempt Total check box selected on the Taxes form.This box is
         * available only if the VAT Reporting feature is enabled in your system.
         */
        public int|float|null $vatExemptTotal = null,
        /**
         * Background calculation giving you the VAT exempt. total in your default
         * currency. This field is applicable if the amount is given in a another
         * currency than your default.
         */
        public int|float|null $vatExemptTotalInCurrency = null,
        /**
         * The field is deprecated for customer document endpoints, please use
         * SalesPerson instead
         */
        #[MapName('salesPersonID')]
        public ?int $salesPersonId = null,
        /**
         * The field is deprecated for customer document endpoints, please use
         * SalesPerson instead
         */
        public ?string $salesPersonDescr = null,
        public ?SalesPersonInCustomerCreditNoteDto $salesPerson = null,
        /**
         * ///The top part > Payment ref. > The reference number of the document, as
         * automatically generated by the system in accordance with the number series
         * assigned to cash sales in the Customer ledger preferences window..
         */
        public ?string $paymentReference = null,
        public ?InvoiceAddressInCustomerCreditNoteDto $invoiceAddress = null,
        public ?InvoiceContactInCustomerCreditNoteDto $invoiceContact = null,
        /** @var ArAdjustDto[]|null */
        public ?array $applications = null,
        public ?bool $dontPrint = null,
        public ?bool $dontEmail = null,
        public ?bool $revoked = null,
        public ?CustomerInCustomerCreditNoteDto $customer = null,
        /**
         * The top part > Type > The document type. The following types are available:
         * invoice, debit note, credit note, overdue charge, credit write-off
         */
        public ?CashSaleDocumentTypeEnum $documentType = null,
        /**
         * The Top part > Ref. no. > The reference number of the customer ledger
         * document in the system.
         */
        public ?string $referenceNumber = null,
        /**
         * The top part > Post period > The period to which the document should be
         * posted. Format YYYYMM.
         */
        public ?string $postPeriod = null,
        /**
         * The financial period to which the transactions recorded in the document
         * should be posted. Format YYYYMM.
         */
        public ?string $financialPeriod = null,
        /** Format YYYYMM. */
        public ?string $closedFinancialPeriod = null,
        /**
         * The top part > Date* > The date when the customer ledger document was
         * created.
         * By default, for a new document, it is the current business date, but you can
         * change the date.
         */
        public ?\Carbon\Carbon $documentDate = null,
        /**
         * The top part > Orig invoice date > The date based on which the Due date and
         * Cash discount date is calculated. Only used if setting "Use Orig Invoice
         * Date" is active in AR Preferences.
         * By default, for a new document, it is the current business date, but you can
         * change the date.
         */
        public ?\Carbon\Carbon $origInvoiceDate = null,
        /**
         * The top part > Status > The status of the document, which can be one of the
         * following: Hold, Balanced, Voided, Scheduled, Open, Closed, Pending print,
         * Pending email.
         */
        public ?CashSaleStatusEnum $status = null,
        /**
         * The top part > Currency > The currency of the document. By default, it is the
         * customer’s default currency,but it can be changed if the Allow Currency
         * Override check box is selected in the AR303000 window.
         */
        public ?string $currencyId = null,
        /**
         * The top part > Amount > The amount paid by the document. The value appears
         * for new documents if the Validate document totals on entry check box is
         * selected on the AR101000 window.
         * If the check box is cleared, then the value appears when the document status
         * is Open.
         */
        public int|float|null $amount = null,
        /**
         * Background calculation giving you the Amount in your default currency. This
         * field is applicable if the amount is given in a another currency than your
         * default.
         */
        public int|float|null $amountInCurrency = null,
        /**
         * The top part > Balance > For an open customer ledger document, the balance
         * after any cash discount was taken.
         * For a document used in the application process, this is the balance after the
         * payments were applied.
         */
        public int|float|null $balance = null,
        /**
         * Background calculation giving you the Balance in your default currency. This
         * field is applicable if the amount is given in a another currency than your
         * default.
         */
        public int|float|null $balanceInCurrency = null,
        /**
         * The top part > Cash discount > The cash discount amount that has been or will
         * be taken on the document, which the system calculates based on the specified
         * credit terms.
         */
        public int|float|null $cashDiscount = null,
        /**
         * Background calculation giving you the Cash discount in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $cashDiscountInCurrency = null,
        public ?PaymentMethodInCustomerCreditNoteDto $paymentMethod = null,
        /**
         * The top part > External reference > The external reference used in
         * AutoInvoice.
         */
        public ?string $customerRefNumber = null,
        /**
         * The top part > Invoice text > Any user-provided description of the customer
         * ledger document.
         */
        public ?string $invoiceText = null,
        /** System generated field for last modification date/time of document. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** The Attachments tab > Creation time > The date the attachment was created. */
        public ?\Carbon\Carbon $createdDateTime = null,
        /**
         * Icon Notes on top of the window > Pop-up window for providing any
         * user-defined text connected to the document.
         */
        public ?string $note = null,
        /**
         * The top part > VAT total > The VAT amount of the document, as defined on the
         * VAT details tab.
         */
        public int|float|null $vatTotal = null,
        /**
         * Background calculation giving you the VAT total in your default currency.
         * This field is applicable if the amount is given in a another currency than
         * your default.
         */
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCustomerCreditNoteDto $location = null,
        public ?BranchNumberInCustomerCreditNoteDto $branchNumber = null,
        /**
         * Financial details tab > The payment information section > Cash account > The
         * cash account associated with the payment method.
         */
        public ?string $cashAccount = null,
        public ?ProjectInCustomerCreditNoteDto $project = null,
        public ?AccountInCustomerCreditNoteDto $account = null,
        public ?SubaccountInCustomerCreditNoteDto $subaccount = null,
        /**
         * The top part > Customer project no. > The customer project no. used in
         * AutoInvoice.
         */
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
