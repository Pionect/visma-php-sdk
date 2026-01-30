<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Ship via &gt; The carrier used for
 * shipping the goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipViaInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipViaInShipmentDtoFactory factory()
 */
class ShipViaInShipmentDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
