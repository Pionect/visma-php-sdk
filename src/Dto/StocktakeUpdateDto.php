<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Stocktake in StocktakeController. Used to update Stocktake.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StocktakeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StocktakeUpdateDtoFactory testFactory()
 */
class StocktakeUpdateDto extends Model
{
    public function __construct(
        public ?array $lines = null,
    ) {}
}
