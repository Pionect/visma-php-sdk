<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Description &gt; The description of the landed cost
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInSupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInSupplierInvoiceLandedCostUpdateDtoFactory testFactory()
 */
class DescriptionInSupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
