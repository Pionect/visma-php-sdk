<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Location &gt; The location in the warehouse from which the item is
 * shipped.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInShipmentDetailLineDtoFactory testFactory()
 */
class LocationInShipmentDetailLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
