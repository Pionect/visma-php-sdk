<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location ID &gt; The unique ID of the warehouse location.
 */
class LocationIdInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
