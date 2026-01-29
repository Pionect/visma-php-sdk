<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Primary item &gt; The primary item for this location, which is the item that is received the most
 * often or stored here in the highest volumes.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrimaryItemIdInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrimaryItemIdInWarehouseLocationUpdateDtoFactory factory()
 */
class PrimaryItemIdInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
