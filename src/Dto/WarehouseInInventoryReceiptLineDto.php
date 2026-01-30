<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Warehouse* &gt; The warehouse where the stock item is received.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInInventoryReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryReceiptLineDtoFactory factory()
 */
class WarehouseInInventoryReceiptLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
