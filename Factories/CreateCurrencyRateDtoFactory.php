<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CreateCurrencyRateDto;
use Pionect\VismaSdk\Enums\CreateCurrencyRateMultDivEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CreateCurrencyRateDto>
 */
class CreateCurrencyRateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromCurrencyId' => $this->faker->uuid(),
            'toCurrencyId' => $this->faker->uuid(),
            'rateType' => number_format($this->faker->randomFloat(2, 50, 150), 2, '.', ''),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'rate' => null,
            'multDiv' => $this->faker->randomElement(CreateCurrencyRateMultDivEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return CreateCurrencyRateDto::class;
    }
}
