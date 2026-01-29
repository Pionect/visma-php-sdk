<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Warehouse &gt; The warehouse to receive the item listed on the order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseOrderLineDtoFactory factory()
 */
class WarehouseInPurchaseOrderLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
