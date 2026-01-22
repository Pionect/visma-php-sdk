<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerPaymentMethodUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfBoolean $active;

    #[Property]
    public ?\DtoValueOfString $cashAccountId;

    #[Property]
    public ?array $paymentMethodDetails;
}
