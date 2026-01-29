<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The manually entered summary cost for all specified inventory adjustment items.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ControlCostInInventoryAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ControlCostInInventoryAdjustmentUpdateDtoFactory factory()
 */
class ControlCostInInventoryAdjustmentUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
