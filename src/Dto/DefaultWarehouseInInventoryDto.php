<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default warehouse &gt; The default
 * warehouse used to store the stock item with the specified item ID.
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultWarehouseInInventoryDtoFactory testFactory()
 */
class DefaultWarehouseInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
