<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A description of the claim.
 */
class DescriptionInExpenseClaimUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
