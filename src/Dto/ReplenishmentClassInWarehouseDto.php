<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Replenishment class &gt; The replenishment class associated with this warehouse.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReplenishmentClassInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReplenishmentClassInWarehouseDtoFactory factory()
 */
class ReplenishmentClassInWarehouseDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
