<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Stocktaking details tab &gt; Item ID &gt; The item ID of the item.
 */
class InventoryInStocktakeLineV2dto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?int $internalId;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
