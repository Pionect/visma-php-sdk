<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CostPriceStatisticsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CostPriceStatisticsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastCost' => $this->faker->randomFloat(2, 0, 1000),
            'averageCost' => $this->faker->randomFloat(2, 0, 1000),
            'minCost' => $this->faker->randomFloat(2, 0, 1000),
            'maxCost' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return CostPriceStatisticsDto::class;
    }
}
