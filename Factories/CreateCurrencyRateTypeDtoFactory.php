<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreateCurrencyRateTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreateCurrencyRateTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'daysEffective' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return CreateCurrencyRateTypeDto::class;
    }
}
