<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Item ID* &gt; 	The stock item for which you want to view data.
 * Click the magnifier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryInInventorySummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryInInventorySummaryDtoFactory testFactory()
 */
class InventoryInInventorySummaryDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
