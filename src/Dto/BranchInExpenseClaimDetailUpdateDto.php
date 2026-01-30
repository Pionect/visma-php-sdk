<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The branch that will reimburse the expenses to the employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInExpenseClaimDetailUpdateDtoFactory factory()
 */
class BranchInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
