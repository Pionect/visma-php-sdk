<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A description of the claim.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInExpenseClaimUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInExpenseClaimUpdateDtoFactory factory()
 */
class DescriptionInExpenseClaimUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
