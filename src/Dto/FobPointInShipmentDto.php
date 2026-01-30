<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Shipping information section &gt; FOB point &gt; The point where
 * obligation of goods passes to the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FobPointInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FobPointInShipmentDtoFactory factory()
 */
class FobPointInShipmentDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
