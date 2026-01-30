<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * MAndatory field: Expense sub. &gt; The corresponding subaccount the system uses to record the part
 * of the expense to be paid back to the employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseSubaccountInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInExpenseClaimDetailDtoFactory testFactory()
 */
class ExpenseSubaccountInExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
