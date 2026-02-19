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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
