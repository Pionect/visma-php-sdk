<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The cost of a unit of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UnitCostInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UnitCostInExpenseClaimDetailUpdateDtoFactory testFactory()
 */
class UnitCostInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
