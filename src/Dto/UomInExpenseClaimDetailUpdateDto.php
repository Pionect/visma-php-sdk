<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The unit of measure in which the quantity is shown.
 */
class UomInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
