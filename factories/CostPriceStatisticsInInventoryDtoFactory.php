<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CostPriceStatisticsInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CostPriceStatisticsInInventoryDtoFactory extends Factory
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
        return CostPriceStatisticsInInventoryDto::class;
    }
}
