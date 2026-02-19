<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Item ID* &gt; The ID of the goods to be transferred.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryItemInInventoryAdjustmentLineDtoFactory testFactory()
 */
class InventoryItemInInventoryAdjustmentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
