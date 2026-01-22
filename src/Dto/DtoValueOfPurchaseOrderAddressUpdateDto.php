<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfPurchaseOrderAddressUpdateDto extends Model
{
    #[Property]
    public ?\PurchaseOrderAddressUpdateDto $value;
}
