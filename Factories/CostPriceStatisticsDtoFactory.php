<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CostPriceStatisticsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CostPriceStatisticsDto>
 */
class CostPriceStatisticsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastCost' => null,
            'averageCost' => null,
            'minCost' => null,
            'maxCost' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CostPriceStatisticsDto::class;
    }
}
