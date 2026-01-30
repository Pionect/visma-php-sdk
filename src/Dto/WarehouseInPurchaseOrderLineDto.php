<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Warehouse &gt; The warehouse to receive the item listed on the order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderLineDtoFactory testFactory()
 */
class WarehouseInPurchaseOrderLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
