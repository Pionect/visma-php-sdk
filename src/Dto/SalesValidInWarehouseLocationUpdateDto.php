<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Sales allowed &gt; You select this check box if sales are allowed from this location.
 */
class SalesValidInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
