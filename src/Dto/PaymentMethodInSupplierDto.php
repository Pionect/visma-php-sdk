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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
