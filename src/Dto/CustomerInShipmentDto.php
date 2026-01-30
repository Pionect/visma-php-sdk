<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Customer &gt; The customer to whom the goods specified in the document should be
 * shipped. (This field does not appear for transfers.)
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInShipmentDtoFactory factory()
 */
class CustomerInShipmentDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
