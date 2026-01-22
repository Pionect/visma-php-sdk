<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerPaymentMethodsDto extends Model
{
    #[Property]
    public ?string $customerId;

    #[Property]
    public ?array $paymentMethods;
}
