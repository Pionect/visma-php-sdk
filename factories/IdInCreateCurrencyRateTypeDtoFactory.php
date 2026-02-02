<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IdInCreateCurrencyRateTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IdInCreateCurrencyRateTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return IdInCreateCurrencyRateTypeDto::class;
    }
}
