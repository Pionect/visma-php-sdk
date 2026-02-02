<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Stocktaking details tab &gt; Location &gt; The warehouse location of the item.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInStocktakeLineV2dtoFactory testFactory()
 */
class LocationInStocktakeLineV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
