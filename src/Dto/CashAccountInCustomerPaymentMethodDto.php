<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Cash account &gt; The cash account to accrue customer payments made by this
 * payment method, if it differs from the default cash account specified for the payment method
 * selected.
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountInCustomerPaymentMethodDtoFactory testFactory()
 */
class CashAccountInCustomerPaymentMethodDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CashAccountInCustomerPaymentMethodDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
