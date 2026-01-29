<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location ID &gt; The unique ID of the warehouse location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationIdInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationIdInWarehouseLocationUpdateDtoFactory factory()
 */
class LocationIdInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
