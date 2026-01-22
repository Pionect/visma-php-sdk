<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task to associate with this location by default.
 */
class ProjectTaskIdInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
