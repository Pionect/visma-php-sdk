<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The Shipping instructions tab &gt; The Delivery address section &gt; Shipping
 * location* &gt; The location from which the order is to be shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShippingLocationInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingLocationInPurchaseOrderDtoFactory factory()
 */
class ShippingLocationInPurchaseOrderDto extends Model
{
    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?int $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
