<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentSoorder extends Model
{
    /** Sales Order Type */
    #[Property]
    public ?string $orderType;

    /** Sales Order Number */
    #[Property]
    public ?string $orderNumber;
}
