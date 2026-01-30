<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Warehouse &gt; The warehouse for which you want to view data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInInventorySummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventorySummaryDtoFactory testFactory()
 */
class WarehouseInInventorySummaryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
