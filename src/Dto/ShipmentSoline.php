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
        /** Sales Order Type */
        public ?string $orderType = null,
        /** Sales Order Number */
        public ?string $orderNumber = null,
        /** Sales Order Line Number, optional if Inventory Id is entered */
        public ?int $orderLineNumber = null,
        /**
         * Inventory Id, ignored if Order Line Number is specified. If more that one
         * line on the Sales order has this Inventory Id, it will not work.
         */
        public ?string $inventoryId = null,
    ) {}
}
