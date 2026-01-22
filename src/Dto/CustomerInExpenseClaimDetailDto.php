<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Customer &gt; The identifier of the customer associated with the expense.
 */
class CustomerInExpenseClaimDetailDto extends Model
{
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
