<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerPaymentMethodInfoDto extends Model
{
    #[Property]
    public ?string $paymentMethodId;

    #[Property]
    public ?bool $isDefault;
}
