<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Contact &gt; The contact associated with the customer.
 */
class ContactInCustomerOverdueChargeDto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?int $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
