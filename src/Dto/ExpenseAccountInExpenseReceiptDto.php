<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Financial details section &gt; Expense account &gt; The expense account to
 * which the system records the part of the expense to be paid back to the employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInExpenseReceiptDtoFactory factory()
 */
class ExpenseAccountInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
