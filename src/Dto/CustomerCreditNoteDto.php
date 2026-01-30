<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerCreditNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerCreditNoteDtoFactory testFactory()
 */
class CustomerCreditNoteDto extends Model
{
    public function __construct(
        public ?CreditTermsInCustomerCreditNoteDto $creditTerms = null,
        public ?\Carbon\Carbon $documentDueDate = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public ?string $externalReference = null,
        public ?bool $isRotRutDeductible = null,
        public int|float|null $exchangeRate = null,
        public ?\Carbon\Carbon $dunningLetterDate = null,
        public ?int $dunningLetterLevel = null,
        public ?ContactInCustomerCreditNoteDto $contact = null,
        public ?array $attachments = null,
        public ?array $taxDetails = null,
        public ?array $lines = null,
        public int|float|null $roundingDiff = null,
        public ?CustomerVatZoneInCustomerCreditNoteDto $customerVatZone = null,
        public ?bool $sendToAutoInvoice = null,
        public ?ChildRecordDto $childRecord = null,
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
        public ?SalesPersonInCustomerCreditNoteDto $salesPerson = null,
        public ?string $paymentReference = null,
        public ?InvoiceAddressInCustomerCreditNoteDto $invoiceAddress = null,
        public ?InvoiceContactInCustomerCreditNoteDto $invoiceContact = null,
        public ?array $applications = null,
        public ?bool $dontPrint = null,
        public ?bool $dontEmail = null,
        public ?bool $revoked = null,
        public ?CustomerInCustomerCreditNoteDto $customer = null,
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
        public ?PaymentMethodInCustomerCreditNoteDto $paymentMethod = null,
        public ?string $customerRefNumber = null,
        public ?string $invoiceText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $note = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCustomerCreditNoteDto $location = null,
        public ?BranchNumberInCustomerCreditNoteDto $branchNumber = null,
        public ?string $cashAccount = null,
        public ?ProjectInCustomerCreditNoteDto $project = null,
        public ?AccountInCustomerCreditNoteDto $account = null,
        public ?SubaccountInCustomerCreditNoteDto $subaccount = null,
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
