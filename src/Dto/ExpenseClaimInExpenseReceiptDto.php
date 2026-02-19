<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Receipt details tab &gt; Expense details section &gt; Expense claim &gt; The expense claim with
 * which the expense receipt is associated.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimInExpenseReceiptDtoFactory testFactory()
 */
class ExpenseClaimInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
