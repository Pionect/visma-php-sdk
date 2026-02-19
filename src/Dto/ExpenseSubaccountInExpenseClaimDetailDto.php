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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
