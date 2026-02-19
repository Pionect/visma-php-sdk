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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
