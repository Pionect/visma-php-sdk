<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInvoiceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInvoiceUpdateDtoFactory factory()
 */
class CustomerInvoiceUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethodId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $creditTermsId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerRefNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $cashDiscountDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $documentDueDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $externalReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerProject = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $exchangeRate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $domesticServicesDeductibleDocument = null,
        public ?RotRutUpdateDto $rotRutDetails = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $contact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $project = null,
        public ?array $taxDetailLines = null,
        public ?array $invoiceLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $sendToAutoInvoice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerVatZoneId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesInvoiceAddressUpdateDto $billingAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesInvoiceContactUpdateDto $invoiceContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $startDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $endDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountingCostRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $originatorDocRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $contractDocRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $revoked = null,
        public ?OverrideNumberSeriesInCustomerInvoiceUpdateDto $overrideNumberSeries = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $directDebitMandateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $excludeDebtCollection = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $debtCollectionCaseNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $debtCollectionCaseStatus = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $debtCollectionCaseType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $debtCollectionCaseUrl = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $referenceNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $childCustomerNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $consolidateInvoices = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $documentDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $origInvoiceDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        public ?PostPeriodInCustomerInvoiceUpdateDto $postPeriod = null,
        public ?FinancialPeriodInCustomerInvoiceUpdateDto $financialPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceText = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[MapName('salesPersonID')]
        public ?SalesPersonIdinCustomerInvoiceUpdateDto $salesPersonId = null,
        public ?SalespersonInCustomerInvoiceUpdateDto $salesperson = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $dontPrint = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $dontEmail = null,
    ) {}
}
