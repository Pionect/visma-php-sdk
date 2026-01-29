<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field for creating a new location. Can not be updated after it has been created.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationIdInSupplierLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationIdInSupplierLocationUpdateDtoFactory factory()
 */
class LocationIdInSupplierLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
