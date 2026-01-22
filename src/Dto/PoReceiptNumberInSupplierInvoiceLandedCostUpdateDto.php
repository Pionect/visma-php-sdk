<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Purchase order receipt no. &gt; The purchase order receipt number
 */
class PoReceiptNumberInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
