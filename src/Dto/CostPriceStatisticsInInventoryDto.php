<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Price/cost information tab &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\CostPriceStatisticsInInventoryDtoFactory testFactory()
 */
class CostPriceStatisticsInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public int|float|null $lastCost = null,
        public int|float|null $averageCost = null,
        public int|float|null $minCost = null,
        public int|float|null $maxCost = null,
    ) {}
}
