<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Account used for prebooking. Note that this feature is not available for all countries.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrebookAccountNumberInSupplierInvoiceLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrebookAccountNumberInSupplierInvoiceLineUpdateDtoFactory testFactory()
 */
class PrebookAccountNumberInSupplierInvoiceLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
