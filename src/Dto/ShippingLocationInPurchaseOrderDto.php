<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The Shipping instructions tab &gt; The Delivery address section &gt; Shipping
 * location* &gt; The location from which the order is to be shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShippingLocationInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingLocationInPurchaseOrderDtoFactory testFactory()
 */
class ShippingLocationInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
