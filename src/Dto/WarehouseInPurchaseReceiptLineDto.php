<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Document details tab &gt; Warehouse* &gt; The warehouse where the item has been
 * received.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptLineDtoFactory testFactory()
 */
class WarehouseInPurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
