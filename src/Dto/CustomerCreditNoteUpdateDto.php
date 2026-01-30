<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerCreditNoteUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerCreditNoteUpdateDtoFactory factory()
 */
class CustomerCreditNoteUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerRefNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $externalReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $contact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $project = null,
        public ?array $lines = null,
        public ?array $taxDetails = null,
        public ?array $applicationLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerVatZoneId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesInvoiceAddressUpdateDto $invoiceAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SalesInvoiceContactUpdateDto $invoiceContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $sendToAutoInvoice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $exchangeRate = null,
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
        public ?PostPeriodInCustomerCreditNoteUpdateDto $postPeriod = null,
        public ?FinancialPeriodInCustomerCreditNoteUpdateDto $financialPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $invoiceText = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[MapName('salesPersonID')]
        public ?SalesPersonIdinCustomerCreditNoteUpdateDto $salesPersonId = null,
        public ?SalespersonInCustomerCreditNoteUpdateDto $salesperson = null,
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
