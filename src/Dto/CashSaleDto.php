<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a invoice in InvoiceController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CashSaleDtoFactory testFactory()
 */
class CashSaleDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?CreditTermsInCashSaleDto $creditTerms = null,
        public ?array $cashSaleLines = null,
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
        public ?SalesPersonInCashSaleDto $salesPerson = null,
        public ?string $paymentReference = null,
        public ?InvoiceAddressInCashSaleDto $invoiceAddress = null,
        public ?InvoiceContactInCashSaleDto $invoiceContact = null,
        public ?array $applications = null,
        public ?bool $dontPrint = null,
        public ?bool $dontEmail = null,
        public ?bool $revoked = null,
        public ?CustomerInCashSaleDto $customer = null,
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
        public ?PaymentMethodInCashSaleDto $paymentMethod = null,
        public ?string $customerRefNumber = null,
        public ?string $invoiceText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $note = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCashSaleDto $location = null,
        public ?BranchNumberInCashSaleDto $branchNumber = null,
        public ?string $cashAccount = null,
        public ?ProjectInCashSaleDto $project = null,
        public ?AccountInCashSaleDto $account = null,
        public ?SubaccountInCashSaleDto $subaccount = null,
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
