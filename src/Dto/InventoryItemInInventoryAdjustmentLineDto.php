<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
