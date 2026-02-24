<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Contract template* &gt; The contract template that is used as a
 * base for the contract.
 *
 * @method static \Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractDtoFactory testFactory()
 */
class ContractTemplateInCustomerContractDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ContractTemplateInCustomerContractDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
