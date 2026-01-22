<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The expense account to which the system should record the part of the expense to be paid back to the
 * employee.
 */
class ExpenseAccountInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
