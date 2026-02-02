<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerContractUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerContractUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInCustomerContractUpdateDto::class;
    }
}
