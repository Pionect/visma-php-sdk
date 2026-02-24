<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Warehouse &gt; The warehouse to receive the item listed on the order.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderDtoFactory testFactory()
 */
class WarehouseInPurchaseOrderDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
