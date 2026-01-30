<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The expense identifier, if an expense of this type is listed as an inventory nonstock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseItemInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseItemInExpenseClaimDetailUpdateDtoFactory factory()
 */
class ExpenseItemInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
