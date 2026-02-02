<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInCreateCurrencyRateTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInCreateCurrencyRateTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInCreateCurrencyRateTypeDto::class;
    }
}
