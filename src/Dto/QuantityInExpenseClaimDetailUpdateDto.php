<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity of this expense item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\QuantityInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\QuantityInExpenseClaimDetailUpdateDtoFactory factory()
 */
class QuantityInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
