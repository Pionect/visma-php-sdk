<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; Expense sub. &gt; The subaccount to be used for recording department related
 * expenses.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseSubaccountInDepartmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInDepartmentDtoFactory testFactory()
 */
class ExpenseSubaccountInDepartmentDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
