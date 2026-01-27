<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Price/cost information tab &gt; Price management section &gt; Price class &gt; The item price
 * class associated with the non-stock item. Group stock or non-stock items with similar price
 * calculation methods.
 */
class PriceClassInInventoryDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
