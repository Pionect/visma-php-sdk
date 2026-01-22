<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Shipping terms &gt; The shipping terms
 * used in relations with the customer.
 */
class ShippingTermsInShipmentDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
