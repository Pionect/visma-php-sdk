<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Number at the left indicating the line number of the table.
 */
class LineNumberInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
