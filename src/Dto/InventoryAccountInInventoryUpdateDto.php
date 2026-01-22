<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Stock items
 */
class InventoryAccountInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
