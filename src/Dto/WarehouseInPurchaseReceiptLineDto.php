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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
