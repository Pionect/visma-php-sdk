<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BookBalanceInFixedAssetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BookBalanceInFixedAssetDto>
 */
class BookBalanceInFixedAssetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'acquisitionCost' => null,
            'depreciationMethodId' => $this->faker->uuid(),
            'depreciationFromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'depreciationFromPeriod' => $this->faker->word(),
            'depreciationToPeriod' => $this->faker->word(),
            'lastDepreciationPeriod' => $this->faker->word(),
            'salvageAmount' => null,
            'usefulLife' => null,
            'book' => null,
        ];
    }

    protected function modelClass(): string
    {
        return BookBalanceInFixedAssetDto::class;
    }
}
