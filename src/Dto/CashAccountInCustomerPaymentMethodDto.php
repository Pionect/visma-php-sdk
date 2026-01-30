<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Cash account &gt; The cash account to accrue customer payments made by this
 * payment method, if it differs from the default cash account specified for the payment method
 * selected.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashAccountInCustomerPaymentMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountInCustomerPaymentMethodDtoFactory testFactory()
 */
class CashAccountInCustomerPaymentMethodDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
