<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer who issued the payment.
 */
class CustomerInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
