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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ReplenishmentClassInWarehouseDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
