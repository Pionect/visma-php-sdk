<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory for POST, not applicable for PUT.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInCustomerContractUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerContractUpdateDtoFactory factory()
 */
class CustomerInCustomerContractUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
