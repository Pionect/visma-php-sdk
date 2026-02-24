<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Pionect\VismaSdk\Enums\LandedCostApDocTypeEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a ApInvoice in SupplierInvoiceController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceDtoFactory testFactory()
 */
class SupplierInvoiceDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierInvoiceDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * @var TaxDetailDto[]|null
         *                          The VAT details tab >
         */
        public ?array $taxDetailLines = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?ApprovalDetailsInSupplierInvoiceDto $approvalDetails = null,
        /**
         * @var SupplierInvoiceLineDto[]|null
         *                                    Transaction lines
         */
        public ?array $invoiceLines = null,
        /**
         * @var SupplierInvoiceLandedCostDto[]|null
         *                                          The Landed cost lines tab >
         */
        public ?array $landedCosts = null,
        /**
         * The Top part > Hold > A check box that indicates that the status of the
         * supplier ledger document is On hold.
         */
        public ?bool $hold = null,
        /** The Top part > Currency > The currency of the document. */
        public int|float|null $exchangeRate = null,
        /** The Top part > Payment ref.no > The payment reference number of the document. */
        public ?string $paymentRefNo = null,
        public ?CreditTermsInSupplierInvoiceDto $creditTerms = null,
        /**
         * The Top part > Apply retainage > A check box that indicates (if selected)
         * that this invoice is an invoice with retainage.
         */
        public ?bool $retainageApply = null,
        /**
         * The Top part > Cash discount date > The end date of the cash discount period,
         * which the system calculates by using the supplier's credit terms.
         */
        public ?\Carbon\Carbon $cashDiscountDate = null,
        /**
         * The Top part > Detail total > The document total as specified in the Document
         * details tab.
         */
        public int|float|null $detailTotal = null,
        /**
         * Background calculation giving you the Detail total in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $detailTotalInCurrency = null,
        /**
         * The Top part > Discount total > The discount total calculated for the
         * document. This total includes discounts of the Group and Document levels.
         */
        public int|float|null $discountTotal = null,
        /**
         * Background calculation giving you the Discount total in your default
         * currency. This field is applicable if the amount is given in another currency
         * than your default.
         */
        public int|float|null $discountTotalInCurrency = null,
        /**
         * The Top part > VAT taxable total > The document total that is subjected to
         * VAT.
         */
        public int|float|null $vatTaxableTotal = null,
        /**
         * Background calculation giving you the VAT taxable total in your default
         * currency. This field is applicable if the amount is given in another currency
         * than your default.
         */
        public int|float|null $vatTaxableTotalInCurrency = null,
        /** The Top part > VAT exempt total > The document total that is exempt from VAT. */
        public int|float|null $vatExemptTotal = null,
        /**
         * Background calculation giving you the VAT exempt total in your default
         * currency. This field is applicable if the amount is given in another currency
         * than your default.
         */
        public int|float|null $vatExemptTotalInCurrency = null,
        /**
         * The Top part > With. tax > The amount of withholding tax calculated for the
         * document, if applicable.
         */
        public int|float|null $withholdingTax = null,
        /**
         * Background calculation giving you the With. tax in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $withholdingTaxInCurrency = null,
        /**
         * The Top part > Supplier ref. > The document's original reference number as
         * assigned by the supplier (for informational purposes).
         */
        public ?string $buyerReference = null,
        /**
         * The Top part > Rounding diff. > The difference between the original invoice
         * amount (including the VAT amount calculated by the system) and rounded
         * invoice amount (including the VAT amount modified by a user for VAT-inclusive
         * items).
         */
        public int|float|null $roundingDiff = null,
        /**
         * Background calculation giving you the Rounding diff. in your default
         * currency. This field is applicable if the amount is given in another currency
         * than your default.
         */
        public int|float|null $roundingDiffInCurrency = null,
        /**
         * The Top part > Amount > The amount to be paid for the document. Equal to the
         * amount (or to the sum of amounts) shown in the Amount column of the Document
         * details tab.
         */
        public int|float|null $amount = null,
        /**
         * The Top part > VAT amount > The VAT amount to be paid for the document. Enter
         * this amount manually according to the VAT amount specified in the original
         * document.
         */
        public int|float|null $vatAmount = null,
        /**
         * The Financial details tab > The VAT section > VAT calculation mode > The VAT
         * calculation mode, which defines which amounts (VAT-inclusive or
         * VAT-exclusive) should be entered in the detail lines of a document
         * (TaxSetting, Gross, Net)
         */
        public ?EntryTypeTaxCalculationModeEnum $taxCalculationMode = null,
        public ?SupplierTaxZoneInSupplierInvoiceDto $supplierTaxZone = null,
        /**
         * The Financial details tab > The Payment information section > Approved for
         * payment > When set to true indicates that the document is approved for
         * payment.
         */
        public ?bool $paySelected = null,
        public int|float|null $curyRetainageTotal = null,
        public int|float|null $curyRetainageUnreleasedAmt = null,
        public ?int $documentVersionNumber = null,
        public ?SupplierInSupplierInvoiceDto $supplier = null,
        /**
         * The top part > Top part > Type > The type of the document. The following
         * types are available: Purchase invoice, credit adjustment, purchase credit
         * note, prepayment.
         */
        public ?LandedCostApDocTypeEnum $documentType = null,
        public ?string $referenceNumber = null,
        /**
         * The Top part > Post period* > The post period of the payment document. Format
         * MMYYYY.
         */
        public ?string $postPeriod = null,
        /**
         * The financial period to which the transactions recorded in the document
         * should be posted. Format YYYYMM.
         */
        public ?string $financialPeriod = null,
        /**
         * The Top part > Date* > The date of the original supplier ledger document; by
         * default, it is the current date, which can be changed.
         */
        public ?\Carbon\Carbon $date = null,
        /**
         * The Top part > OrigInvoiceDate* > The original invoice date of the original
         * supplier ledger document; by default, it is the current date, which can be
         * changed.
         */
        public ?\Carbon\Carbon $origInvoiceDate = null,
        /**
         * The Top part > Due date* > The date when payment for the document is due in
         * accordance with the supplier's credit terms.
         */
        public ?\Carbon\Carbon $dueDate = null,
        /**
         * The Top part > Approval status > The status of the document in Visma.net
         * Approval. [New, Canceled, SentToApproval, ReceivedByApproval,
         * InProgressApproval, RejectedInApproval, ApprovedInApproval,
         * ActiveWorkflowApproval.
         */
        public ?TimeCardSummaryApprovalStatusEnum $approvalStatus = null,
        /**
         * The Top part > Document status > A read-only field that shows the status of
         * the supplier ledger document:[Hold, Balanced, Voided, Scheduled, Open,
         * Closed, Printed, Prebooked, Reserved]
         */
        public ?SupplierInvoiceForSupplierQueryParametersStatusEnum $status = null,
        /** The Top part > Currency > The currency of the document. */
        public ?string $currencyId = null,
        /**
         * The Top part > Balance > The balance of the supplier ledger document after
         * VAT (if inclusive) and the discount as specified in the tabs below.
         */
        public int|float|null $balance = null,
        /**
         * Background calculation giving you the Balance in your default currency. This
         * field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $balanceInCurrency = null,
        /**
         * The Top part > Cash discount > The cash discount amount that has been or will
         * be taken in the document, which the system calculates based in the specified
         * credit terms.
         */
        public int|float|null $cashDiscount = null,
        /**
         * Background calculation giving you the Cash discount in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $cashDiscountInCurrency = null,
        public ?PaymentMethodInSupplierInvoiceDto $paymentMethod = null,
        /**
         * The Top part > Supplier ref. > The document's original reference number as
         * assigned by the supplier (for informational purposes).
         */
        public ?string $supplierReference = null,
        /**
         * The Top part > Description > A user-provided description for this supplier
         * ledger document.
         */
        public ?string $description = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * Document details tab and Applications tab > Icon Notes > Pop-up window for
         * providing any user-defined text connected with to invoice.
         */
        public ?string $note = null,
        /** Format YYYYMM. */
        public ?string $closedFinancialPeriod = null,
        public ?LocationInSupplierInvoiceDto $location = null,
        /** The Top part > VAT total > The total amount of tax paid in the document. */
        public int|float|null $vatTotal = null,
        /**
         * Background calculation giving you the VAT total in your default currency.
         * This field is applicable if the amount is given in another currency than your
         * default.
         */
        public int|float|null $vatTotalInCurrency = null,
        public ?BranchNumberDto $branchNumber = null,
        /**
         * The Financial details tab > The Payment information section > Pay date* > The
         * date when the invoice should be paid. The date is the difference between the
         * document due date or discount date and the number of days specified in the
         * Payment lead time field in AP303000.
         */
        public ?\Carbon\Carbon $payDate = null,
        /**
         * The Financial details tab > The Payment information section > Payment message
         * > The message connected with the payment.
         */
        public ?string $paymentMessage = null,
        /**
         * Financial details tab > The payment information section > Cash account > The
         * cash account associated with the payment method.
         */
        public ?string $cashAccount = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
