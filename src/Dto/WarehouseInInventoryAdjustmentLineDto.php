<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Warehouse* &gt; The warehouse where the item is stocked.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryAdjustmentLineDtoFactory testFactory()
 */
class WarehouseInInventoryAdjustmentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
