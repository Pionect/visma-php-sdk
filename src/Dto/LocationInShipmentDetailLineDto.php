<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Location &gt; The location in the warehouse from which the item is
 * shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInShipmentDetailLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInShipmentDetailLineDtoFactory factory()
 */
class LocationInShipmentDetailLineDto extends Model
{
    /** Location*. */
    #[Property]
    public ?string $countryId;

    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?string $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
