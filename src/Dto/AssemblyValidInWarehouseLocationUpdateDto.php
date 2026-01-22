<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Assembly allowed &gt; You select this check box if assembly operations are allowed at this location.
 */
class AssemblyValidInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
