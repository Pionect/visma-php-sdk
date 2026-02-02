<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Document details tab &gt; Warehouse* &gt; The warehouse from which the items is
 * shipped.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInShipmentDetailLineDtoFactory testFactory()
 */
class WarehouseInShipmentDetailLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
