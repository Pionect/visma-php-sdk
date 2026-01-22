<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory, the item class to which the item is assigned. Selecting a class provides default settings
 * for the item.
 */
class ItemClassInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
