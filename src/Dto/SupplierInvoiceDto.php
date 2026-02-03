<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a ApInvoice in SupplierInvoiceController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceDtoFactory testFactory()
 */
class SupplierInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var TaxDetailDto[]|null */
        public ?array $taxDetailLines = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?ApprovalDetailsInSupplierInvoiceDto $approvalDetails = null,
        /** @var SupplierInvoiceLineDto[]|null */
        public ?array $invoiceLines = null,
        /** @var SupplierInvoiceLandedCostDto[]|null */
        public ?array $landedCosts = null,
        public ?bool $hold = null,
        public int|float|null $exchangeRate = null,
        public ?string $paymentRefNo = null,
        public ?CreditTermsInSupplierInvoiceDto $creditTerms = null,
        public ?bool $retainageApply = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public int|float|null $detailTotal = null,
        public int|float|null $detailTotalInCurrency = null,
        public int|float|null $discountTotal = null,
        public int|float|null $discountTotalInCurrency = null,
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $vatTaxableTotalInCurrency = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatExemptTotalInCurrency = null,
        public int|float|null $withholdingTax = null,
        public int|float|null $withholdingTaxInCurrency = null,
        public ?string $buyerReference = null,
        public int|float|null $roundingDiff = null,
        public int|float|null $roundingDiffInCurrency = null,
        public int|float|null $amount = null,
        public int|float|null $vatAmount = null,
        public ?string $taxCalculationMode = null,
        public ?SupplierTaxZoneInSupplierInvoiceDto $supplierTaxZone = null,
        public ?bool $paySelected = null,
        public int|float|null $curyRetainageTotal = null,
        public int|float|null $curyRetainageUnreleasedAmt = null,
        public ?int $documentVersionNumber = null,
        public ?SupplierInSupplierInvoiceDto $supplier = null,
        public ?string $documentType = null,
        public ?string $referenceNumber = null,
        public ?string $postPeriod = null,
        public ?string $financialPeriod = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $origInvoiceDate = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?string $approvalStatus = null,
        public ?string $status = null,
        public ?string $currencyId = null,
        public int|float|null $balance = null,
        public int|float|null $balanceInCurrency = null,
        public int|float|null $cashDiscount = null,
        public int|float|null $cashDiscountInCurrency = null,
        public ?PaymentMethodInSupplierInvoiceDto $paymentMethod = null,
        public ?string $supplierReference = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $note = null,
        public ?string $closedFinancialPeriod = null,
        public ?LocationInSupplierInvoiceDto $location = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?BranchNumberDto $branchNumber = null,
        public ?\Carbon\Carbon $payDate = null,
        public ?string $paymentMessage = null,
        public ?string $cashAccount = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
