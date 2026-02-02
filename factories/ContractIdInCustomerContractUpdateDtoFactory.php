<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContractIdInCustomerContractUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractIdInCustomerContractUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ContractIdInCustomerContractUpdateDto::class;
    }
}
