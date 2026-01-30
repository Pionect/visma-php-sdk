<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory, the item class to which the item is assigned. Selecting a class provides default settings
 * for the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemClassInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemClassInInventoryUpdateDtoFactory factory()
 */
class ItemClassInInventoryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
