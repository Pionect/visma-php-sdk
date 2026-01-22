<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Description &gt; The description of the landed cost
 */
class DescriptionInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
