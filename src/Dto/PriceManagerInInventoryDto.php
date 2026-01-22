<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Price/cost information tab &gt; Price management section &gt; Price manager &gt; The manager
 * responsible for the product pricing.
 */
class PriceManagerInInventoryDto extends Model
{
    #[Property]
    public ?string $name;
}
