<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Amount &gt; The amount in currency of the landed cost
 */
class AmountInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
