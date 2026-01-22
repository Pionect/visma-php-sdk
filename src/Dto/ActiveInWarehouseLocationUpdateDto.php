<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Active &gt; This check box indicates whether this location is active.
 */
class ActiveInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
