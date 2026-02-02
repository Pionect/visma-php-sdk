<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Branch &gt; The company branch that will incur the expenses.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInExpenseReceiptDtoFactory testFactory()
 */
class BranchInExpenseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
