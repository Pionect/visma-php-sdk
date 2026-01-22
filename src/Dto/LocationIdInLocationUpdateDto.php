<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field for creating a new location. Can not be updated after it has been created.
 */
class LocationIdInLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
