<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ToCurrencyIdInCreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ToCurrencyIdInCreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ToCurrencyIdInCreateCurrencyRateDto::class;
    }
}
