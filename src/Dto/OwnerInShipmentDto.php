<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Owner &gt; The user assigned to approve the document.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OwnerInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInShipmentDtoFactory factory()
 */
class OwnerInShipmentDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
