<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MultDivInCreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class MultDivInCreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return MultDivInCreateCurrencyRateDto::class;
    }
}
