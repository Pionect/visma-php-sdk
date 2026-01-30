<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Document details tab &gt; Warehouse* &gt; The warehouse from which the items is
 * shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInShipmentDetailLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInShipmentDetailLineDtoFactory testFactory()
 */
class WarehouseInShipmentDetailLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
