<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Warehouse* &gt; The warehouse where the item is stocked.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInInventoryAdjustmentLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryAdjustmentLineDtoFactory factory()
 */
class WarehouseInInventoryAdjustmentLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
