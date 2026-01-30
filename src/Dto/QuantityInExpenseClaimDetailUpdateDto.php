<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity of this expense item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\QuantityInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\QuantityInExpenseClaimDetailUpdateDtoFactory testFactory()
 */
class QuantityInExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
