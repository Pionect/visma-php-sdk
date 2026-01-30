<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Expense account &gt; The expense account to be used for recording department-related
 * expenses.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountInDepartmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInDepartmentDtoFactory factory()
 */
class ExpenseAccountInDepartmentDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
