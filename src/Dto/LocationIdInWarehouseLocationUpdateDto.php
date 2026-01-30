<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location ID &gt; The unique ID of the warehouse location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationIdInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationIdInWarehouseLocationUpdateDtoFactory testFactory()
 */
class LocationIdInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
