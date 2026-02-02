<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Customer &gt; The customer to whom the goods specified in the document should be
 * shipped. (This field does not appear for transfers.)
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInShipmentDtoFactory testFactory()
 */
class CustomerInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
