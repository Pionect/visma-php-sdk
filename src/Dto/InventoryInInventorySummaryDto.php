<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Item ID* &gt; 	The stock item for which you want to view data.
 * Click the magnifier.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryInInventorySummaryDtoFactory testFactory()
 */
class InventoryInInventorySummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
