<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromCurrencyId' => $this->faker->uuid(),
            'toCurrencyId' => $this->faker->uuid(),
            'rateType' => number_format($this->faker->randomFloat(2, 50, 150), 2, '.', ''),
            'rate' => $this->faker->randomFloat(2, 0, 1000),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'multDiv' => $this->faker->word(),
            'rateReciprocal' => $this->faker->randomFloat(2, 0, 1000),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyRateDto::class;
    }
}
