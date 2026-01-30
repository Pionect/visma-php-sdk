<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Item ID* &gt; The ID of the goods to be transferred.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryItemInInventoryAdjustmentLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryItemInInventoryAdjustmentLineDtoFactory factory()
 */
class InventoryItemInInventoryAdjustmentLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
