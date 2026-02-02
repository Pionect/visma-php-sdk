<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Expense account &gt; The expense account to which the system should record the part
 * of the expense to be paid back to the employee.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInExpenseClaimDetailDtoFactory testFactory()
 */
class ExpenseAccountInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
