<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The company location associated with the claim.
 */
class LocationInExpenseClaimUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
