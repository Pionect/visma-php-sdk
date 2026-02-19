<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Payment method &gt; The customer's default payment method; this field is not
 * available for credit notes.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInPaymentDtoFactory testFactory()
 */
class PaymentMethodInPaymentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
