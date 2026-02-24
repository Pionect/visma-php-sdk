<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer whose payment method you want to view
 * or add; select a customer from the list of customers defined in the system.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerPaymentMethodDtoFactory testFactory()
 */
class CustomerInCustomerPaymentMethodDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerInCustomerPaymentMethodDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
