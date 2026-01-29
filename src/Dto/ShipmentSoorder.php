<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentSoorderFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentSoorderFactory factory()
 */
class ShipmentSoorder extends Model
{
    /** Sales Order Type */
    #[Property]
    public ?string $orderType;

    /** Sales Order Number */
    #[Property]
    public ?string $orderNumber;
}
