<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Warehouse &gt; The warehouse to receive the item listed on the order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderDtoFactory factory()
 */
class WarehouseInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
