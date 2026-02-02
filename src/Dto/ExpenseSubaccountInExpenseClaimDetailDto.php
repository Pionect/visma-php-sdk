<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MAndatory field: Expense sub. &gt; The corresponding subaccount the system uses to record the part
 * of the expense to be paid back to the employee.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInExpenseClaimDetailDtoFactory testFactory()
 */
class ExpenseSubaccountInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
