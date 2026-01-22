<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Quantity &gt; The quantity of the stock item with the same lot number. It is 1 for items with serial
 * numbers.
 */
class QuantityInAllocationsUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
