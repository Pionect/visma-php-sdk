<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the customer associated with the expense.
 */
class CustomerInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
