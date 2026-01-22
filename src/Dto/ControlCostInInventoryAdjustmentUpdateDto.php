<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The manually entered summary cost for all specified inventory adjustment items.
 */
class ControlCostInInventoryAdjustmentUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
