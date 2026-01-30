<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromCurrencyId' => null,
            'toCurrencyId' => null,
            'rateType' => null,
            'effectiveDate' => null,
            'rate' => null,
            'multDiv' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CreateCurrencyRateDto::class;
    }
}
