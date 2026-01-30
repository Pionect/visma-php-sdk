<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Payment in PaymentController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentDtoFactory testFactory()
 */
class PaymentDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $refNbr = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $applicationDate = null,
        public ?string $applicationPeriod = null,
        public ?string $paymentRef = null,
        public ?CustomerInPaymentDto $customer = null,
        public ?LocationInPaymentDto $location = null,
        public ?PaymentMethodInPaymentDto $paymentMethod = null,
        public ?string $cashAccount = null,
        public ?string $currency = null,
        public int|float|null $paymentAmount = null,
        public ?string $invoiceText = null,
        public int|float|null $appliedToDocuments = null,
        public int|float|null $appliedToOrders = null,
        public int|float|null $availableBalance = null,
        public int|float|null $writeOffAmount = null,
        public int|float|null $financeCharges = null,
        public int|float|null $deductedCharges = null,
        public ?string $branch = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $paymentLines = null,
        public ?array $ordersToApply = null,
        public ?FinancialDetailsInPaymentDto $financialDetails = null,
        public int|float|null $paymentAmountInCurrency = null,
        public int|float|null $availableBalanceInCurrency = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
