<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentSolineFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentSolineFactory factory()
 */
class ShipmentSoline extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?string $orderNumber = null,
        public ?int $orderLineNumber = null,
        public ?string $inventoryId = null,
    ) {}
}
