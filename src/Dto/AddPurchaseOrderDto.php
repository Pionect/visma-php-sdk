<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AddPurchaseOrderDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $poOrderNumber;
}
