<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentSolineFactory testFactory()
 */
class ShipmentSoline extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $orderType = null,
        public ?string $orderNumber = null,
        public ?int $orderLineNumber = null,
        public ?string $inventoryId = null,
    ) {}
}
