<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default warehouse &gt; The default
 * warehouse used to store the stock item with the specified item ID.
 */
class DefaultWarehouseInInventoryDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
