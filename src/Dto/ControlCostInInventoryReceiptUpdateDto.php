<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The manually entered summary amount for all specified inventory receipt items.
 */
class ControlCostInInventoryReceiptUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
