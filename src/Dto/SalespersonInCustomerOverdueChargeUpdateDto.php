<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The identifier of the salesperson involved.
 */
class SalespersonInCustomerOverdueChargeUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
