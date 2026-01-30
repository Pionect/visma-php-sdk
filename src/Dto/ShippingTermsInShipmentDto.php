<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Shipping terms &gt; The shipping terms
 * used in relations with the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShippingTermsInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingTermsInShipmentDtoFactory testFactory()
 */
class ShippingTermsInShipmentDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
