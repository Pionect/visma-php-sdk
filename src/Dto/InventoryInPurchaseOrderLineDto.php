<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Item ID &gt; The ID of the item.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryInPurchaseOrderLineDtoFactory testFactory()
 */
class InventoryInPurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
