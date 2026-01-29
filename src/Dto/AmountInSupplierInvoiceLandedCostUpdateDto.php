<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Amount &gt; The amount in currency of the landed cost
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AmountInSupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AmountInSupplierInvoiceLandedCostUpdateDtoFactory factory()
 */
class AmountInSupplierInvoiceLandedCostUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
