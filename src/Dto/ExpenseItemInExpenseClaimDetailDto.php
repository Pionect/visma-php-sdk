<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Expense item* &gt; The expense identifier, if an expense of this type is listed as
 * an inventory nonstock item.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseItemInExpenseClaimDetailDtoFactory testFactory()
 */
class ExpenseItemInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
