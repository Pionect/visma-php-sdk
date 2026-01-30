<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory for POST, not applicable for PUT.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractUpdateDtoFactory testFactory()
 */
class ContractTemplateInCustomerContractUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
