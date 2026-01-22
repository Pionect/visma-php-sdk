<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerPaymentMethodCreateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $customerId;

    #[Property]
    public ?\DtoValueOfString $paymentMethodId;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $active;

    #[Property]
    public ?\DtoValueOfString $cashAccountId;

    #[Property]
    public ?array $paymentMethodDetails;
}
