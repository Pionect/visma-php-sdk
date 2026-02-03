<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Stocktake in StocktakeController. Used to update Stocktake.
 *
 * @method static \Pionect\VismaSdk\Factories\StocktakeUpdateDtoFactory testFactory()
 */
class StocktakeUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var StocktakeLineUpdateDto[]|null */
        public ?array $lines = null,
    ) {}
}
