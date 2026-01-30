<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Stocktaking details tab &gt; Location &gt; The warehouse location of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInStocktakeLineV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInStocktakeLineV2dtoFactory testFactory()
 */
class LocationInStocktakeLineV2dto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
