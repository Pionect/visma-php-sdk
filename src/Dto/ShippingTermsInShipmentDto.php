<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Shipping terms &gt; The shipping terms
 * used in relations with the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingTermsInShipmentDtoFactory testFactory()
 */
class ShippingTermsInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
