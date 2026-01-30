<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The expense account to which the system should record the part of the expense to be paid back to the
 * employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInExpenseClaimDetailUpdateDtoFactory factory()
 */
class ExpenseAccountInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
