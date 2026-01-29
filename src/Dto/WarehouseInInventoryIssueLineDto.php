<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Warehouse &gt; (This column appears only if the Warehouses functionality is enabled
 * in your system.) The warehouse from which the item is issued.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInInventoryIssueLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryIssueLineDtoFactory factory()
 */
class WarehouseInInventoryIssueLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
