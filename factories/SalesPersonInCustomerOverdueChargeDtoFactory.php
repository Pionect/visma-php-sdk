<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInCustomerOverdueChargeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInCustomerOverdueChargeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonInCustomerOverdueChargeDto::class;
    }
}
