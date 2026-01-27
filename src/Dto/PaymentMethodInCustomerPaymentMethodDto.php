<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Payment method* &gt; The payment method used as a template for a
 * customer payment method you are currently viewing; select a payment method to use its settings for
 * creating a new customer payment method.
 */
class PaymentMethodInCustomerPaymentMethodDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
