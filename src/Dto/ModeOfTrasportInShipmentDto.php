<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Mode of transportation &gt; The method of
 * transportation.
 *
 * @method static \Pionect\VismaSdk\Factories\ModeOfTrasportInShipmentDtoFactory testFactory()
 */
class ModeOfTrasportInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
