<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
