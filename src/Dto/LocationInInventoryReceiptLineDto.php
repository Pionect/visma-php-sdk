<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location &gt; The warehouse location from which the goods are transferred.
 */
class LocationInInventoryReceiptLineDto extends Model
{
    /** Location*. */
    #[Property]
    public ?string $countryId;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
