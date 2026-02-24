<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CostPriceStatisticsInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CostPriceStatisticsInInventoryDto>
 */
class CostPriceStatisticsInInventoryDtoFactory extends Factory
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
        return CostPriceStatisticsInInventoryDto::class;
    }
}
