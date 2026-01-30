<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed Costs Tab &gt; Location &gt; The ID of the warehouse location
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationIdInSupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationIdInSupplierInvoiceLandedCostUpdateDtoFactory factory()
 */
class LocationIdInSupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
