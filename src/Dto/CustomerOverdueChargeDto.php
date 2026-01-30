<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a invoice in CustomerOverdueChargeController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerOverdueChargeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerOverdueChargeDtoFactory testFactory()
 */
class CustomerOverdueChargeDto extends Model
{
    public function __construct(
        public ?CreditTermsInCustomerOverdueChargeDto $creditTerms = null,
        public ?\Carbon\Carbon $documentDueDate = null,
        public ?\Carbon\Carbon $cashDiscountDate = null,
        public ?string $externalReference = null,
        public int|float|null $exchangeRate = null,
        public ?\Carbon\Carbon $dunningLetterDate = null,
        public ?int $dunningLetterLevel = null,
        public ?ContactInCustomerOverdueChargeDto $contact = null,
        public ?array $attachments = null,
        public ?array $taxDetails = null,
        public ?array $lines = null,
        public int|float|null $roundingDiff = null,
        public ?CustomerVatZoneInCustomerOverdueChargeDto $customerVatZone = null,
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
        public ?SalesPersonInCustomerOverdueChargeDto $salesPerson = null,
        public ?string $paymentReference = null,
        public ?InvoiceAddressInCustomerOverdueChargeDto $invoiceAddress = null,
        public ?InvoiceContactInCustomerOverdueChargeDto $invoiceContact = null,
        public ?array $applications = null,
        public ?bool $dontPrint = null,
        public ?bool $dontEmail = null,
        public ?bool $revoked = null,
        public ?CustomerInCustomerOverdueChargeDto $customer = null,
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
        public ?PaymentMethodInCustomerOverdueChargeDto $paymentMethod = null,
        public ?string $customerRefNumber = null,
        public ?string $invoiceText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $note = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCustomerOverdueChargeDto $location = null,
        public ?BranchNumberInCustomerOverdueChargeDto $branchNumber = null,
        public ?string $cashAccount = null,
        public ?ProjectInCustomerOverdueChargeDto $project = null,
        public ?AccountInCustomerOverdueChargeDto $account = null,
        public ?SubaccountInCustomerOverdueChargeDto $subaccount = null,
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
