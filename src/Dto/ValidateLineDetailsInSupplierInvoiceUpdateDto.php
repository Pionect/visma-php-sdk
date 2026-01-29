<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * If this flag is set/true, the system will surface any line validation errors to the clients rather
 * than silently ignoring these.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ValidateLineDetailsInSupplierInvoiceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ValidateLineDetailsInSupplierInvoiceUpdateDtoFactory factory()
 */
class ValidateLineDetailsInSupplierInvoiceUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
