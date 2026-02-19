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
        /** Click on the magnifier. > The identifier. */
        public ?int $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
