<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerPaymentMethodDetailUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $detailId;

    #[Property]
    public ?\DtoValueOfString $value;
}
