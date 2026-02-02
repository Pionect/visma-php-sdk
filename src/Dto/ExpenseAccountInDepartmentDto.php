<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; Expense account &gt; The expense account to be used for recording department-related
 * expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInDepartmentDtoFactory testFactory()
 */
class ExpenseAccountInDepartmentDto extends SpatieData
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
