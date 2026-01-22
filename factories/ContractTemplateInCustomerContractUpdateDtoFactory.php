<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContractTemplateInCustomerContractUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractTemplateInCustomerContractUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ContractTemplateInCustomerContractUpdateDto::class;
    }
}
