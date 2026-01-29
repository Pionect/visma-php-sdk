<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The Payment information section &gt; Payment method &gt; The
 * identifier for the payment method that the customer will use to pay the document.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInCustomerOverdueChargeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInCustomerOverdueChargeDtoFactory factory()
 */
class PaymentMethodInCustomerOverdueChargeDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
