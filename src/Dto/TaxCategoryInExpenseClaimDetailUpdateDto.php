<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The tax category associated with the expense item.
 */
class TaxCategoryInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
