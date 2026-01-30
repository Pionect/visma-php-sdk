<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Stocktaking details tab &gt; Item ID &gt; The item ID of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryInStocktakeLineV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryInStocktakeLineV2dtoFactory factory()
 */
class InventoryInStocktakeLineV2dto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
