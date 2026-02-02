<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierDocumentDtoFactory testFactory()
 */
class SupplierDocumentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AccountInSupplierDocumentDto $account = null,
        public ?SubaccountInSupplierDocumentDto $subaccount = null,
        public int|float|null $amount = null,
        public int|float|null $amountInCurrency = null,
        public ?BranchInSupplierDocumentDto $branch = null,
        public ?SupplierInSupplierDocumentDto $supplier = null,
        public ?string $documentType = null,
        public ?string $referenceNumber = null,
        public ?string $postPeriod = null,
        public ?string $financialPeriod = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $origInvoiceDate = null,
        public ?\Carbon\Carbon $dueDate = null,
        public ?string $approvalStatus = null,
        public ?string $status = null,
        public ?string $currencyId = null,
        public int|float|null $balance = null,
        public int|float|null $balanceInCurrency = null,
        public int|float|null $cashDiscount = null,
        public int|float|null $cashDiscountInCurrency = null,
        public ?PaymentMethodInSupplierDocumentDto $paymentMethod = null,
        public ?string $supplierReference = null,
        public ?string $description = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $note = null,
        public ?string $closedFinancialPeriod = null,
        public ?LocationInSupplierDocumentDto $location = null,
        public int|float|null $vatTotal = null,
        public int|float|null $vatTotalInCurrency = null,
        public ?BranchNumberDto $branchNumber = null,
        public ?\Carbon\Carbon $payDate = null,
        public ?string $paymentMessage = null,
        public ?string $cashAccount = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
