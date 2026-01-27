<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Shipping information section &gt; FOB point &gt; The point where
 * obligation of goods passes to the customer.
 */
class FobPointInShipmentDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
