<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakeV2dto;
use Pionect\VismaSdk\Enums\StocktakeV2dtoSummaryStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\StocktakeV2dto>
 */
class StocktakeV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNbr' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'summaryStatus' => $this->faker->randomElement(StocktakeV2dtoSummaryStatusEnum::cases()),
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
