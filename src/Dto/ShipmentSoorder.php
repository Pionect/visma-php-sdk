<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentSoorderFactory testFactory()
 */
class ShipmentSoorder extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ShipmentSoorderFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Sales Order Type */
        public ?string $orderType = null,
        /** Sales Order Number */
        public ?string $orderNumber = null,
    ) {}
}
