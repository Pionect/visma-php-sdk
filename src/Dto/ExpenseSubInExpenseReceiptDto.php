<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Financial details section &gt; Expense sub. &gt; The corresponding
 * subaccount the system uses to record the part of the expense to be paid back to the employee.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubInExpenseReceiptDtoFactory testFactory()
 */
class ExpenseSubInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
