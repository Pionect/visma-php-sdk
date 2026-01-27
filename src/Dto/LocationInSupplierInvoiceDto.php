<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Location* &gt; The supplier location associated with the purchase.
 */
class LocationInSupplierInvoiceDto extends Model
{
    /** Location*. */
    #[Property]
    public ?string $countryId;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
