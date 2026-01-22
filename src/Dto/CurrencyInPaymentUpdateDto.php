<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Currency &gt; The currency of the payment document. Once the customer is selected,
 * the system inserts the customer's default currency.
 */
class CurrencyInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
