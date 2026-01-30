<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CostPriceStatisticsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CostPriceStatisticsDtoFactory factory()
 */
class CostPriceStatisticsDto extends Model
{
    public function __construct(
        public int|float|null $lastCost = null,
        public int|float|null $averageCost = null,
        public int|float|null $minCost = null,
        public int|float|null $maxCost = null,
    ) {}
}
