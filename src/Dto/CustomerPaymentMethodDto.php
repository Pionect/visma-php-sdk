<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDtoFactory testFactory()
 */
class CustomerPaymentMethodDto extends Model
{
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
