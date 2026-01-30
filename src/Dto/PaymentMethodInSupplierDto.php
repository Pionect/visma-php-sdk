<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Payment settings tab &gt; Payment settings section &gt; Payment method &gt; The default payment
 * method to be used for the supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInSupplierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInSupplierDtoFactory factory()
 */
class PaymentMethodInSupplierDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
