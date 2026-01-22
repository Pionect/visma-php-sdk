<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Warehouse &gt; The ID of the warehouse
 */
class SiteIdInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
