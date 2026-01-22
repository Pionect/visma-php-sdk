<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CurrencyRateTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyRateTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'daysEffective' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyRateTypeDto::class;
    }
}
