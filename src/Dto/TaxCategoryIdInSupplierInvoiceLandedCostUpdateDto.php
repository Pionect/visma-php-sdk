<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; VAT Category &gt; The ID of VAT cateogry
 */
class TaxCategoryIdInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
