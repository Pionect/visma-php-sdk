<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The Shipping instructions tab &gt; The Delivery address section &gt; Shipping
 * location* &gt; The location from which the order is to be shipped.
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingLocationInPurchaseOrderDtoFactory testFactory()
 */
class ShippingLocationInPurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
