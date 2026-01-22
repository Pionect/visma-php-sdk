<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FromCurrencyIdInCreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FromCurrencyIdInCreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FromCurrencyIdInCreateCurrencyRateDto::class;
    }
}
