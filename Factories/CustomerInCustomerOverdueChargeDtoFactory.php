<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerOverdueChargeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerOverdueChargeDtoFactory extends Factory
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
        return CustomerInCustomerOverdueChargeDto::class;
    }
}
