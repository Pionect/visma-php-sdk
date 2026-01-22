<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory for POST, not applicable for PUT. The unique alphanumeric identifier of the  item that is
 * used in UI.
 */
class InventoryNumberInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
