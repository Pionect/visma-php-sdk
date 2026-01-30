<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RateInCreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RateInCreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return RateInCreateCurrencyRateDto::class;
    }
}
