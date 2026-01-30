<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Price/cost information tab &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CostPriceStatisticsInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CostPriceStatisticsInInventoryDtoFactory testFactory()
 */
class CostPriceStatisticsInInventoryDto extends Model
{
    public function __construct(
        public int|float|null $lastCost = null,
        public int|float|null $averageCost = null,
        public int|float|null $minCost = null,
        public int|float|null $maxCost = null,
    ) {}
}
