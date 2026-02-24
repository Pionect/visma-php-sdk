<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CurrencyRateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CurrencyRateDto>
 */
class CurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'fromCurrencyId' => $this->faker->uuid(),
            'toCurrencyId' => $this->faker->uuid(),
            'rateType' => number_format($this->faker->randomFloat(2, 50, 150), 2, '.', ''),
            'rate' => null,
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'multDiv' => $this->faker->word(),
            'rateReciprocal' => null,
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyRateDto::class;
    }
}
