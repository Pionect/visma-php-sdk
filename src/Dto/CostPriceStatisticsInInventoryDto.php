<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Price/cost information tab &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CostPriceStatisticsInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CostPriceStatisticsInInventoryDtoFactory factory()
 */
class CostPriceStatisticsInInventoryDto extends Model
{
    /** Cost price statistics section &gt; Last cost &gt; The last standard cost used for the stock item. */
    #[Property]
    public ?float $lastCost;

    /** Cost price statistics section &gt; Average cost &gt; The average cost for the stock item. */
    #[Property]
    public ?float $averageCost;

    /** Cost price statistics section &gt; Min. cost &gt; The minimum cost for the stock item. */
    #[Property]
    public ?float $minCost;

    /** Cost price statistics section &gt; Max. cost &gt; The maximum cost for the stock item. */
    #[Property]
    public ?float $maxCost;
}
