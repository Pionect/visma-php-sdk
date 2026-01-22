<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Financial settings section &gt; Supplier class* &gt;
 * The class of the supplier.
 */
class SupplierClassInSupplierDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
