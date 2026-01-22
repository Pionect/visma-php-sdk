<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location &gt; The location in the warehouse.
 */
class LocationInAllocationsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
