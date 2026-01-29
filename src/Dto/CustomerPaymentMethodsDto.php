<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodsDtoFactory factory()
 */
class CustomerPaymentMethodsDto extends Model
{
    #[Property]
    public ?string $customerId;

    #[Property]
    public ?array $paymentMethods;
}
