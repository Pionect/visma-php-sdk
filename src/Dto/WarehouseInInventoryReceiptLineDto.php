<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Warehouse* &gt; The warehouse where the stock item is received.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryReceiptLineDtoFactory testFactory()
 */
class WarehouseInInventoryReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
