<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; Expense sub. &gt; The subaccount to be used for recording department related
 * expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInDepartmentDtoFactory testFactory()
 */
class ExpenseSubaccountInDepartmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
