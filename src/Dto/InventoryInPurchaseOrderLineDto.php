<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Item ID &gt; The ID of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryInPurchaseOrderLineDtoFactory factory()
 */
class InventoryInPurchaseOrderLineDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
