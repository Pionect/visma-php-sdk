<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an invoice in InvoiceController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInvoiceDtoFactory testFactory()
 */
class CustomerInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?CreditTermsInCustomerInvoiceDto $creditTerms = null,
        public ?\Carbon\Carbon $documentDueDate = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public ?string $externalReference = null,
        public ?bool $isRotRutDeductible = null,
        public int|float|null $exchangeRate = null,
        public ?\Carbon\Carbon $dunningLetterDate = null,
        public ?int $dunningLetterLevel = null,
        public ?ContactInCustomerInvoiceDto $contact = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        /** @var TaxDetailDto[]|null */
        public ?array $taxDetails = null,
        /** @var CustomerInvoiceLineDto[]|null */
        public ?array $invoiceLines = null,
        public ?bool $sendToAutoInvoice = null,
        public int|float|null $roundingDiff = null,
        public ?CustomerVatZoneInCustomerInvoiceDto $customerVatZone = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?\Carbon\Carbon $endDate = null,
        public ?string $accountingCostRef = null,
        public ?string $originatorDocRef = null,
        public ?string $contractDocRef = null,
        public ?ChildRecordDto $childRecord = null,
        public ?DirectDebitMandateDto $directDebitMandate = null,
        public ?bool $excludeDebtCollection = null,
        public ?DebtCollectionInCustomerInvoiceDto $debtCollection = null,
        public ?string $timeStamp = null,
        public ?bool $hold = null,
        public int|float|null $discountTotal = null,
        public int|float|null $discountTotalInCurrency = null,
        public int|float|null $detailTotal = null,
        public int|float|null $detailTotalInCurrency = null,
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $vatTaxableTotalInCurrency = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatExemptTotalInCurrency = null,
        #[MapName('salesPersonID')]
        public ?int $salesPersonId = null,
        public ?string $salesPersonDescr = null,
        public ?SalesPersonInCustomerInvoiceDto $salesPerson = null,
        public ?string $paymentReference = null,
        public ?InvoiceAddressInCustomerInvoiceDto $invoiceAddress = null,
        public ?InvoiceContactInCustomerInvoiceDto $invoiceContact = null,
        /** @var ArAdjustDto[]|null */
        public ?array $applications = null,
        public ?bool $dontPrint = null,
        public ?bool $dontEmail = null,
        public ?bool $revoked = null,
        public ?CustomerInCustomerInvoiceDto $customer = null,
        public ?string $documentType = null,
        public ?string $referenceNumber = null,
        public ?string $postPeriod = null,
        public ?string $financialPeriod = null,
        public ?string $closedFinancialPeriod = null,
        public ?\Carbon\Carbon $documentDate = null,
        public ?\Carbon\Carbon $origInvoiceDate = null,
        public ?string $status = null,
        public ?string $currencyId = null,
        public int|float|null $amount = null,
        public int|float|null $amountInCurrency = null,
        public int|float|null $balance = null,
        public int|float|null $balanceInCurrency = null,
        public int|float|null $cashDiscount = null,
        public int|float|null $cashDiscountInCurrency = null,
        public ?PaymentMethodInCustomerInvoiceDto $paymentMethod = null,
        public ?string $customerRefNumber = null,
        public ?string $invoiceText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $note = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCustomerInvoiceDto $location = null,
        public ?BranchNumberInCustomerInvoiceDto $branchNumber = null,
        public ?string $cashAccount = null,
        public ?ProjectInCustomerInvoiceDto $project = null,
        public ?AccountInCustomerInvoiceDto $account = null,
        public ?SubaccountInCustomerInvoiceDto $subaccount = null,
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
