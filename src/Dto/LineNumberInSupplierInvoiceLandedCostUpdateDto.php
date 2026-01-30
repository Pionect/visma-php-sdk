<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Number at the left indicating the line number of the table.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LineNumberInSupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LineNumberInSupplierInvoiceLandedCostUpdateDtoFactory testFactory()
 */
class LineNumberInSupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
