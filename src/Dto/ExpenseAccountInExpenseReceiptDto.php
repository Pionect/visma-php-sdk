<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Financial details section &gt; Expense account &gt; The expense account to
 * which the system records the part of the expense to be paid back to the employee.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInExpenseReceiptDtoFactory testFactory()
 */
class ExpenseAccountInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
