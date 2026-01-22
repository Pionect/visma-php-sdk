<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RateTypeInCreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RateTypeInCreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return RateTypeInCreateCurrencyRateDto::class;
    }
}
