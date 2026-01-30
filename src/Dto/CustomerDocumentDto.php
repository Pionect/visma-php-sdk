<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDocumentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDocumentDtoFactory factory()
 */
class CustomerDocumentDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $documentDueDate = null,
        public ?BranchInCustomerDocumentDto $branch = null,
        public ?CustomerInCustomerDocumentDto $customer = null,
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
        public ?PaymentMethodInCustomerDocumentDto $paymentMethod = null,
        public ?string $customerRefNumber = null,
        public ?string $invoiceText = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?string $note = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?LocationInCustomerDocumentDto $location = null,
        public ?BranchNumberInCustomerDocumentDto $branchNumber = null,
        public ?string $cashAccount = null,
        public ?ProjectInCustomerDocumentDto $project = null,
        public ?AccountInCustomerDocumentDto $account = null,
        public ?SubaccountInCustomerDocumentDto $subaccount = null,
        public ?string $customerProject = null,
        public ?string $errorInfo = null,
    ) {}
}
