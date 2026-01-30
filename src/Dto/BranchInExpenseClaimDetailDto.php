<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Branch &gt; The branch that will reimburse the expenses to the employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInExpenseClaimDetailDtoFactory factory()
 */
class BranchInExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
