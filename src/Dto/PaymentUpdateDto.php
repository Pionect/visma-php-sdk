<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentUpdateDtoFactory testFactory()
 */
class PaymentUpdateDto extends Model
{
    public function __construct(
        public ?ReferenceNumberInPaymentUpdateDto $referenceNumber = null,
        public ?TypeInPaymentUpdateDto $type = null,
        public ?HoldInPaymentUpdateDto $hold = null,
        public ?ApplicationDateInPaymentUpdateDto $applicationDate = null,
        public ?ApplicationPeriodInPaymentUpdateDto $applicationPeriod = null,
        public ?PaymentRefInPaymentUpdateDto $paymentRef = null,
        public ?CustomerInPaymentUpdateDto $customer = null,
        public ?LocationInPaymentUpdateDto $location = null,
        public ?PaymentMethodInPaymentUpdateDto $paymentMethod = null,
        public ?CashAccountInPaymentUpdateDto $cashAccount = null,
        public ?CurrencyInPaymentUpdateDto $currency = null,
        public ?PaymentAmountInPaymentUpdateDto $paymentAmount = null,
        public ?InvoiceTextInPaymentUpdateDto $invoiceText = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        public ?array $ordersToApply = null,
        public ?array $financeCharges = null,
        public ?array $paymentLines = null,
    ) {}
}
