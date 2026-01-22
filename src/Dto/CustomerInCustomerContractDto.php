<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer associated with the contract.
 */
class CustomerInCustomerContractDto extends Model
{
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
