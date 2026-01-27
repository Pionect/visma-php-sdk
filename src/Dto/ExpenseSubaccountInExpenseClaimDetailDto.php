<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * MAndatory field: Expense sub. &gt; The corresponding subaccount the system uses to record the part
 * of the expense to be paid back to the employee.
 */
class ExpenseSubaccountInExpenseClaimDetailDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
