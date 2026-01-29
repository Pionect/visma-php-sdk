<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Item ID* &gt; The ID of the goods to be transferred.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryItemInInventoryReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryItemInInventoryReceiptLineDtoFactory factory()
 */
class InventoryItemInInventoryReceiptLineDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
