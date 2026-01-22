<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The branch that will reimburse the expenses to the employee.
 */
class BranchInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
