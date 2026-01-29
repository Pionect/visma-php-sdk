<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Item ID* &gt; 	The stock item for which you want to view data.
 * Click the magnifier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryInInventorySummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryInInventorySummaryDtoFactory factory()
 */
class InventoryInInventorySummaryDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
