<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Warehouse &gt; The warehouse to receive the item listed on the order.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderLineDtoFactory testFactory()
 */
class WarehouseInPurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
