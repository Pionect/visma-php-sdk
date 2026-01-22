<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreateCurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromCurrencyId' => $this->faker->word(),
            'toCurrencyId' => $this->faker->word(),
            'rateType' => $this->faker->word(),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'rate' => $this->faker->word(),
            'multDiv' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CreateCurrencyRateDto::class;
    }
}
