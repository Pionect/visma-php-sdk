<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The tax category associated with the expense item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInExpenseClaimDetailUpdateDtoFactory factory()
 */
class TaxCategoryInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
