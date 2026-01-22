<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentSoline extends Model
{
    /** Sales Order Type */
    #[Property]
    public ?string $orderType;

    /** Sales Order Number */
    #[Property]
    public ?string $orderNumber;

    /** Sales Order Line Number, optional if Inventory Id is entered */
    #[Property]
    public ?int $orderLineNumber;

    /** Inventory Id, ignored if Order Line Number is specified. If more that one line on the Sales order has this Inventory Id, it will not work. */
    #[Property]
    public ?string $inventoryId;
}
