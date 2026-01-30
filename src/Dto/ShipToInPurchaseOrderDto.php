<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Shipping instructions tab &gt; The Delivery address section &gt; Ship to &gt; The particular
 * destination of the selected type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipToInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipToInPurchaseOrderDtoFactory testFactory()
 */
class ShipToInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
