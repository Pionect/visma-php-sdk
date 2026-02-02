<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Replenishment class &gt; The replenishment class associated with this warehouse.
 *
 * @method static \Pionect\VismaSdk\Factories\ReplenishmentClassInWarehouseDtoFactory testFactory()
 */
class ReplenishmentClassInWarehouseDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
