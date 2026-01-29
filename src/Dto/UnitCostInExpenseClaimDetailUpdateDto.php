<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The cost of a unit of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UnitCostInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UnitCostInExpenseClaimDetailUpdateDtoFactory factory()
 */
class UnitCostInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
