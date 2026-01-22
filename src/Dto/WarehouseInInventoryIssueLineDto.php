<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Warehouse &gt; (This column appears only if the Warehouses functionality is enabled
 * in your system.) The warehouse from which the item is issued.
 */
class WarehouseInInventoryIssueLineDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
