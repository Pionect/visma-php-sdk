<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BookBalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BookBalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'acquisitionCost' => $this->faker->randomFloat(2, 0, 1000),
            'depreciationMethodId' => $this->faker->uuid(),
            'depreciationFromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'depreciationFromPeriod' => $this->faker->word(),
            'depreciationToPeriod' => $this->faker->word(),
            'lastDepreciationPeriod' => $this->faker->word(),
            'salvageAmount' => $this->faker->randomFloat(2, 0, 1000),
            'usefulLife' => $this->faker->randomFloat(2, 0, 1000),
            'book' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BookBalanceDto::class;
    }
}
