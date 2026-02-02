<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Payment settings tab &gt; Payment settings section &gt; Payment method &gt; The default payment
 * method to be used for the supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInSupplierDtoFactory testFactory()
 */
class PaymentMethodInSupplierDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
