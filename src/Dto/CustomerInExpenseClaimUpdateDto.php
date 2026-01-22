<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The applicable customer.
 */
class CustomerInExpenseClaimUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
