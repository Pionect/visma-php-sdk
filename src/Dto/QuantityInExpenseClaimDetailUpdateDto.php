<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity of this expense item.
 */
class QuantityInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
