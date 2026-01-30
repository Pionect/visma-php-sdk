<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory for POST, not applicable for PUT.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractIdInCustomerContractUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractIdInCustomerContractUpdateDtoFactory testFactory()
 */
class ContractIdInCustomerContractUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
