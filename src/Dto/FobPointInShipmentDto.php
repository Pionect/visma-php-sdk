<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Shipping information section &gt; FOB point &gt; The point where
 * obligation of goods passes to the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\FobPointInShipmentDtoFactory testFactory()
 */
class FobPointInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
