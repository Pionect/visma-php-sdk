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
        /**
         * Cost price statistics section > Last cost > The last standard cost used for
         * the stock item.
         */
        public int|float|null $lastCost = null,
        /**
         * Cost price statistics section > Average cost > The average cost for the stock
         * item.
         */
        public int|float|null $averageCost = null,
        /**
         * Cost price statistics section > Min. cost > The minimum cost for the stock
         * item.
         */
        public int|float|null $minCost = null,
        /**
         * Cost price statistics section > Max. cost > The maximum cost for the stock
         * item.
         */
        public int|float|null $maxCost = null,
    ) {}
}
