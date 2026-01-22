<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Cost separately &gt; You select this check box if the costs for goods available at this location
 * will be calculated separately from costs calculated at the system-level; that is, for FIFO and
 * specific valuation methods, separate cost layers will be created for this location.
 */
class IsCostedInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
