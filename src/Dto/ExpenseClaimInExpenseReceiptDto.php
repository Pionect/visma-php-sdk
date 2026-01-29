<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipt details tab &gt; Expense details section &gt; Expense claim &gt; The expense claim with
 * which the expense receipt is associated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimInExpenseReceiptDtoFactory factory()
 */
class ExpenseClaimInExpenseReceiptDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
