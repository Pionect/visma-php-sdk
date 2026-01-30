<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDebitNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDebitNoteUpdateDtoFactory factory()
 */
class CustomerDebitNoteUpdateDto extends Model
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
        public int|float|null $exchangeRate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $domesticServicesDeductibleDocument = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $contact = null,
        public ?RotRutUpdateDto $rotRutDetails = null,
        public ?array $taxDetailLines = null,
        public ?array $lines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerVatZoneId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesInvoiceAddressUpdateDto $invoiceAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesInvoiceContactUpdateDto $invoiceContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
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
        public ?PostPeriodInCustomerDebitNoteUpdateDto $postPeriod = null,
        public ?FinancialPeriodInCustomerDebitNoteUpdateDto $financialPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceText = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[MapName('salesPersonID')]
        public ?SalesPersonIdinCustomerDebitNoteUpdateDto $salesPersonId = null,
        public ?SalespersonInCustomerDebitNoteUpdateDto $salesperson = null,
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
