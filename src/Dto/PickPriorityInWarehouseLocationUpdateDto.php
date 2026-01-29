<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Pick priority &gt; The order of which location should have priority.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PickPriorityInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PickPriorityInWarehouseLocationUpdateDtoFactory factory()
 */
class PickPriorityInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
