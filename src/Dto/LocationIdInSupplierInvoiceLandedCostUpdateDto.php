<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Location &gt; The ID of the warehouse location
 */
class LocationIdInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
