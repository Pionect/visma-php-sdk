<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Mode of transportation &gt; The method of
 * transportation.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ModeOfTrasportInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ModeOfTrasportInShipmentDtoFactory factory()
 */
class ModeOfTrasportInShipmentDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
