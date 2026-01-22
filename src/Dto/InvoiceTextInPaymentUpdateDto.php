<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Invoice text &gt; A user-defined description of the payment.
 */
class InvoiceTextInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
