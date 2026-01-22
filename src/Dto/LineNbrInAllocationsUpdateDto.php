<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Line no. &gt; The line of the purchase order that contains the selected item.
 */
class LineNbrInAllocationsUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
