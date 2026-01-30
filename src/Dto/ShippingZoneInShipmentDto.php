<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Shipping zone ID &gt; The shipping zone
 * of the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShippingZoneInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingZoneInShipmentDtoFactory testFactory()
 */
class ShippingZoneInShipmentDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
