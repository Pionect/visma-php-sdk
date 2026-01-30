<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The part of the total amount that will not be paid back to the employee. The percentage depends on
 * the company policy.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeePartInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeePartInExpenseClaimDetailUpdateDtoFactory testFactory()
 */
class EmployeePartInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
