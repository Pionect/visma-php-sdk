<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the customer location associated with the expense.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInExpenseClaimDetailUpdateDtoFactory factory()
 */
class LocationInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
