<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RateInUpdateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RateInUpdateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return RateInUpdateCurrencyRateDto::class;
    }
}
