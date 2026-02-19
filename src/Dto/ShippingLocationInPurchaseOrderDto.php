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
        /** Click the magnifier > The identifier */
        public ?int $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
