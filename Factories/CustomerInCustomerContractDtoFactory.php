<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerContractDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInCustomerContractDto::class;
    }
}
