<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreateCurrencyRateTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreateCurrencyRateTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => null,
            'description' => $this->faker->sentence(),
            'daysEffective' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CreateCurrencyRateTypeDto::class;
    }
}
