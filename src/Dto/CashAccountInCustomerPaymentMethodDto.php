<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Cash account &gt; The cash account to accrue customer payments made by this
 * payment method, if it differs from the default cash account specified for the payment method
 * selected.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashAccountInCustomerPaymentMethodDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountInCustomerPaymentMethodDtoFactory factory()
 */
class CashAccountInCustomerPaymentMethodDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
