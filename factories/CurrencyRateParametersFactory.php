<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CurrencyRateParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyRateParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'toDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'fromCurrency' => $this->faker->word(),
            'toCurrency' => $this->faker->word(),
            'rateType' => number_format($this->faker->randomFloat(2, 50, 150), 2, '.', ''),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyRateParameters::class;
    }
}
