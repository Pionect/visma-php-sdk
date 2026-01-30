<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Payment method* &gt; The payment method used as a template for a
 * customer payment method you are currently viewing; select a payment method to use its settings for
 * creating a new customer payment method.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInCustomerPaymentMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInCustomerPaymentMethodDtoFactory testFactory()
 */
class PaymentMethodInCustomerPaymentMethodDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
