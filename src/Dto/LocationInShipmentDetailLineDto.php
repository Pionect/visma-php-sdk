<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Location &gt; The location in the warehouse from which the item is
 * shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInShipmentDetailLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInShipmentDetailLineDtoFactory testFactory()
 */
class LocationInShipmentDetailLineDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
