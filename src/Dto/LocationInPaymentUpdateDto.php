<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Location* &gt; The customer location associated with the sale.
 * Once the customer is selected, this field displays the customer's default location.
 */
class LocationInPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
