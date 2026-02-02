<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Branch &gt; The branch that will reimburse the expenses to the employee.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInExpenseClaimDetailDtoFactory testFactory()
 */
class BranchInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
