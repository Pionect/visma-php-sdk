<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a invoice in InvoiceController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditNoteDtoFactory testFactory()
 */
class CreditNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $externalReference = null,
        public ?ContactIdNameDto $contact = null,
        public ?array $attachments = null,
        public ?array $invoiceLines = null,
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
        public ?SalesPersonInCreditNoteDto $salesPerson = null,
        public ?string $paymentReference = null,
        public ?InvoiceAddressInCreditNoteDto $invoiceAddress = null,
        public ?InvoiceContactInCreditNoteDto $invoiceContact = null,
        public ?array $applications = null,
        public ?bool $dontPrint = null,
        public ?bool $dontEmail = null,
        public ?bool $revoked = null,
        public ?CustomerInCreditNoteDto $customer = null,
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
        public ?PaymentMethodInCreditNoteDto $paymentMethod = null,
        public ?string $customerRefNumber = null,
        public ?string $invoiceText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $note = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCreditNoteDto $location = null,
        public ?BranchNumberInCreditNoteDto $branchNumber = null,
        public ?string $cashAccount = null,
        public ?ProjectInCreditNoteDto $project = null,
        public ?AccountInCreditNoteDto $account = null,
        public ?SubaccountInCreditNoteDto $subaccount = null,
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
