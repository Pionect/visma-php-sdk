<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The employee who is claiming the expenses. If the claim is released, an Accounts Payable bill will
 * be generated to this employee.
 */
class ClaimedByInExpenseClaimUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
