<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Contract template* &gt; The contract template that is used as a
 * base for the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractDtoFactory testFactory()
 */
class ContractTemplateInCustomerContractDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
