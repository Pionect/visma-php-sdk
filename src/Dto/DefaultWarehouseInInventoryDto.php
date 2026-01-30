<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default warehouse &gt; The default
 * warehouse used to store the stock item with the specified item ID.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultWarehouseInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultWarehouseInInventoryDtoFactory factory()
 */
class DefaultWarehouseInInventoryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
