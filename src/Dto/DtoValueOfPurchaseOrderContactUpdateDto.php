<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfPurchaseOrderContactUpdateDto extends Model
{
    #[Property]
    public ?\PurchaseOrderContactUpdateDto $value;
}
