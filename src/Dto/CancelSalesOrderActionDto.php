<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CancelSalesOrderActionDto extends Model
{
    /** Mandatory field */
    #[Property]
    public ?string $orderType;
}
