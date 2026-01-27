<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Stocktaking details tab &gt; Location &gt; The warehouse location of the item.
 */
class LocationInStocktakeLineV2dto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?int $internalId;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
