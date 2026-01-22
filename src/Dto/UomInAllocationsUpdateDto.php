<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * UoM &gt; The unit of measure for the specified quantity of the inventory item.
 */
class UomInAllocationsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
