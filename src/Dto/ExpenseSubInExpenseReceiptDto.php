<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Expense sub. &gt; The corresponding
 * subaccount the system uses to record the part of the expense to be paid back to the employee.
 */
class ExpenseSubInExpenseReceiptDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
