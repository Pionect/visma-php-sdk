<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer associated with the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInCustomerContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerContractDtoFactory factory()
 */
class CustomerInCustomerContractDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
