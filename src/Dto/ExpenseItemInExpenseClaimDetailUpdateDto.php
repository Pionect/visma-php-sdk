<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The expense identifier, if an expense of this type is listed as an inventory nonstock item.
 */
class ExpenseItemInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
