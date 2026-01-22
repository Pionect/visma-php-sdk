<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PaymentOrdersLinesUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfString $orderType;

    #[Property]
    public ?\DtoValueOfString $orderNumber;

    #[Property]
    public ?\DtoValueOfDecimal $appliedToOrder;
}
