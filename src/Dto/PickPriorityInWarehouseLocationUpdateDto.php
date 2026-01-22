<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Pick priority &gt; The order of which location should have priority.
 */
class PickPriorityInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
