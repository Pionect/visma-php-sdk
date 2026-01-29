<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContractTemplateInCustomerContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractTemplateInCustomerContractDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ContractTemplateInCustomerContractDto::class;
    }
}
