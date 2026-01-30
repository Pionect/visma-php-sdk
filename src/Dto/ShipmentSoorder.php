<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentSoorderFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentSoorderFactory testFactory()
 */
class ShipmentSoorder extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?string $orderNumber = null,
    ) {}
}
