<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CostPriceStatisticsDtoFactory testFactory()
 */
class CostPriceStatisticsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public int|float|null $lastCost = null,
        public int|float|null $averageCost = null,
        public int|float|null $minCost = null,
        public int|float|null $maxCost = null,
    ) {}
}
