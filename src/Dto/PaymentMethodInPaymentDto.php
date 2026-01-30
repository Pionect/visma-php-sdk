<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Payment method &gt; The customer's default payment method; this field is not
 * available for credit notes.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInPaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInPaymentDtoFactory testFactory()
 */
class PaymentMethodInPaymentDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
