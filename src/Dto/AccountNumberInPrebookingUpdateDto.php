<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Account used for prebooking.
 */
class AccountNumberInPrebookingUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
