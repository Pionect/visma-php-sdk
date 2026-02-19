<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Ship via &gt; The carrier used for
 * shipping the goods.
 *
 * @method static \Pionect\VismaSdk\Factories\ShipViaInShipmentDtoFactory testFactory()
 */
class ShipViaInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
