<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierBalanceV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierBalanceV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'beginBalance' => $this->faker->randomFloat(2, 0, 1000),
            'purchases' => $this->faker->randomFloat(2, 0, 1000),
            'paymentsAndPrepayments' => $this->faker->randomFloat(2, 0, 1000),
            'adjustmentsAndDiscounts' => $this->faker->randomFloat(2, 0, 1000),
            'yearToDateBalance' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierBalanceV2dto::class;
    }
}
