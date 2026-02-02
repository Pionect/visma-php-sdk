<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Stocktaking details tab &gt; Item ID &gt; The item ID of the item.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryInStocktakeLineV2dtoFactory testFactory()
 */
class InventoryInStocktakeLineV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
