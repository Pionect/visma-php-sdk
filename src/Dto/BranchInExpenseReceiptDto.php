<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Branch &gt; The company branch that will incur the expenses.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInExpenseReceiptDtoFactory testFactory()
 */
class BranchInExpenseReceiptDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
