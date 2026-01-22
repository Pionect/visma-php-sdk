<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The vat category of the item, which by default is the vat category associated with the item class.
 */
class VatCodeInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
