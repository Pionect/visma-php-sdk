<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Warehouse &gt; (This column appears only if the Warehouses functionality is enabled
 * in your system.) The warehouse from which the item is issued.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryIssueLineDtoFactory testFactory()
 */
class WarehouseInInventoryIssueLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
