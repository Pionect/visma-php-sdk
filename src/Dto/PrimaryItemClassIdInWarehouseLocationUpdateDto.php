<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Primary item class &gt; The primary item class for this location; items of this class are received
 * the most often or stored here in the highest volumes.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrimaryItemClassIdInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrimaryItemClassIdInWarehouseLocationUpdateDtoFactory factory()
 */
class PrimaryItemClassIdInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
