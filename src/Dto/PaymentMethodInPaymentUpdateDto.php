<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Payment method &gt; The customer's default payment method.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInPaymentUpdateDtoFactory testFactory()
 */
class PaymentMethodInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
