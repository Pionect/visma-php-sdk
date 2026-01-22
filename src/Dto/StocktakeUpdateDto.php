<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Stocktake in StocktakeController. Used to update Stocktake.
 */
class StocktakeUpdateDto extends Model
{
    #[Property]
    public ?array $lines;
}
