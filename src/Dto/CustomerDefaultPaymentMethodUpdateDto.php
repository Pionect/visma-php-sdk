<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerDefaultPaymentMethodUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $paymentMethodId;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $isDefault;
}
