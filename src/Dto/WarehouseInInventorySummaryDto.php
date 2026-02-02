<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Warehouse &gt; The warehouse for which you want to view data.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventorySummaryDtoFactory testFactory()
 */
class WarehouseInInventorySummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
