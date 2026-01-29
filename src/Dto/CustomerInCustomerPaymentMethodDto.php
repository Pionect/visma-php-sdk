<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer whose payment method you want to view
 * or add; select a customer from the list of customers defined in the system.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInCustomerPaymentMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerPaymentMethodDtoFactory factory()
 */
class CustomerInCustomerPaymentMethodDto extends Model
{
    #[Property]
    public ?string $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
