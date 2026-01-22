<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project &gt; The project to associate with this location by default.
 */
class ProjectIdInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
