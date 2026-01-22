<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerBalanceV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerBalanceV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchNumber' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'beginBalance' => $this->faker->randomFloat(2, 0, 1000),
            'sales' => $this->faker->randomFloat(2, 0, 1000),
            'paymentsAndPrepayments' => $this->faker->randomFloat(2, 0, 1000),
            'adjustmentsAndDiscounts' => $this->faker->randomFloat(2, 0, 1000),
            'overdueCharges' => $this->faker->randomFloat(2, 0, 1000),
            'yearToDateBalance' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerBalanceV2dto::class;
    }
}
