<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part Location* &gt; The supplier location from which the items should be
 * received or to which they should be returned.
 */
class LocationInPurchaseReceiptBasicDto extends Model
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
