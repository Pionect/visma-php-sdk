<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory for POST, not applicable for PUT.
 */
class CustomerInCustomerContractUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
