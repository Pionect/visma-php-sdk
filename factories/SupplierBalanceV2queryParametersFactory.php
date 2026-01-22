<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierBalanceV2queryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierBalanceV2queryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'fromFinPeriod' => $this->faker->word(),
            'toFinPeriod' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierBalanceV2queryParameters::class;
    }
}
