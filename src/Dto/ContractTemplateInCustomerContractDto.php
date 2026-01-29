<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Contract template* &gt; The contract template that is used as a
 * base for the contract.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractDtoFactory factory()
 */
class ContractTemplateInCustomerContractDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
