<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; VAT Category &gt; The ID of VAT cateogry
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryIdInSupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryIdInSupplierInvoiceLandedCostUpdateDtoFactory factory()
 */
class TaxCategoryIdInSupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
