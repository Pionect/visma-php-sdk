<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakeV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakeV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNbr' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'summaryStatus' => $this->faker->word(),
            'freezeDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'numberOfLines' => $this->faker->numberBetween(1, 100),
            'physicalQty' => null,
            'varianceQty' => null,
            'varianceCost' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lines' => [],
            'timestamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return StocktakeV2dto::class;
    }
}
