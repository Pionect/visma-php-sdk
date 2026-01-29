<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Expense item* &gt; The expense identifier, if an expense of this type is listed as
 * an inventory nonstock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseItemInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseItemInExpenseClaimDetailDtoFactory factory()
 */
class ExpenseItemInExpenseClaimDetailDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
