<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Shipping zone ID &gt; The shipping zone
 * of the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingZoneInShipmentDtoFactory testFactory()
 */
class ShippingZoneInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
