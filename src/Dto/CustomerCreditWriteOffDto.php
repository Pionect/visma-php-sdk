<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerCreditWriteOffDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerCreditWriteOffDtoFactory factory()
 */
class CustomerCreditWriteOffDto extends Model
{
    public function __construct(
        public ?bool $hold = null,
        public int|float|null $roundingDiff = null,
        public ?CustomerVatZoneInCustomerCreditWriteOffDto $customerVatZone = null,
        public ?string $timeStamp = null,
        public ?CustomerInCustomerCreditWriteOffDto $customer = null,
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
        public ?PaymentMethodInCustomerCreditWriteOffDto $paymentMethod = null,
        public ?string $customerRefNumber = null,
        public ?string $invoiceText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $note = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCustomerCreditWriteOffDto $location = null,
        public ?BranchNumberInCustomerCreditWriteOffDto $branchNumber = null,
        public ?string $cashAccount = null,
        public ?ProjectInCustomerCreditWriteOffDto $project = null,
        public ?AccountInCustomerCreditWriteOffDto $account = null,
        public ?SubaccountInCustomerCreditWriteOffDto $subaccount = null,
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
