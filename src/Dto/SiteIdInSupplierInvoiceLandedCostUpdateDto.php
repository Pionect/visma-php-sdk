<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Warehouse &gt; The ID of the warehouse
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SiteIdInSupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SiteIdInSupplierInvoiceLandedCostUpdateDtoFactory factory()
 */
class SiteIdInSupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
