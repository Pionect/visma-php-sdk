<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Account used for prebooking. Note that this feature is not available for all countries.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrebookAccountNumberInSupplierInvoiceLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrebookAccountNumberInSupplierInvoiceLineUpdateDtoFactory factory()
 */
class PrebookAccountNumberInSupplierInvoiceLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
