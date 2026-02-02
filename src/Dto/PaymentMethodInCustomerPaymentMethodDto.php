<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Payment method* &gt; The payment method used as a template for a
 * customer payment method you are currently viewing; select a payment method to use its settings for
 * creating a new customer payment method.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInCustomerPaymentMethodDtoFactory testFactory()
 */
class PaymentMethodInCustomerPaymentMethodDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
