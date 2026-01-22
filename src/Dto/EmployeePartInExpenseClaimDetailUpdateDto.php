<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The part of the total amount that will not be paid back to the employee. The percentage depends on
 * the company policy.
 */
class EmployeePartInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
