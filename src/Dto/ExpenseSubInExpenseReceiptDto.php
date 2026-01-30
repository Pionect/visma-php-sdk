<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Expense sub. &gt; The corresponding
 * subaccount the system uses to record the part of the expense to be paid back to the employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseSubInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubInExpenseReceiptDtoFactory factory()
 */
class ExpenseSubInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
