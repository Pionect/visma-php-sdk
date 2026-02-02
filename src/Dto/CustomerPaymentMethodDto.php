<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDtoFactory testFactory()
 */
class CustomerPaymentMethodDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?CustomerInCustomerPaymentMethodDto $customer = null,
        public ?PaymentMethodInCustomerPaymentMethodDto $paymentMethod = null,
        public ?bool $active = null,
        public ?CashAccountInCustomerPaymentMethodDto $cashAccount = null,
        public ?string $cardOrAccountNo = null,
        public ?array $paymentMethodDetails = null,
        public ?string $timeStamp = null,
    ) {}
}
