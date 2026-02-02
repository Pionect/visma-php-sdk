<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Owner &gt; The user assigned to approve the document.
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInShipmentDtoFactory testFactory()
 */
class OwnerInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
