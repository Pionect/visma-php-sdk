<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Payment ref.* &gt; A secondary payment reference identifier,
 * which can be a system-generated number or an external reference number entered manually.
 */
class PaymentRefInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
