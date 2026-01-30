<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Purchase order receipt no. &gt; The purchase order receipt number
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PoReceiptNumberInSupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PoReceiptNumberInSupplierInvoiceLandedCostUpdateDtoFactory testFactory()
 */
class PoReceiptNumberInSupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
