<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CurrencyDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'symbol' => $this->faker->word(),
            'isBaseCurrency' => $this->faker->boolean(),
            'decimalPrecision' => $this->faker->numberBetween(1, 100),
            'isUsedForAccounting' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyDto::class;
    }
}
