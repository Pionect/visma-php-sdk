<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Cash account* &gt; The default cash account associated with the
 * payment method.
 */
class CashAccountInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
