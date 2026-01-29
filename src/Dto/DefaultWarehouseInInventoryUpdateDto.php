<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default warehouse &gt; The default
 * warehouse used to store the stock item with the specified item ID.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultWarehouseInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultWarehouseInInventoryUpdateDtoFactory factory()
 */
class DefaultWarehouseInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
