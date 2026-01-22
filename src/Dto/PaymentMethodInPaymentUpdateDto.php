<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Payment method &gt; The customer's default payment method.
 */
class PaymentMethodInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
