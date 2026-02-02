<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerCreditWriteOffDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerCreditWriteOffDtoFactory extends Factory
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
        return CustomerInCustomerCreditWriteOffDto::class;
    }
}
