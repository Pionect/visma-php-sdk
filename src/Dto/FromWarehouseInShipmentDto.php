<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Warehouse ID* &gt; The warehouse from which the goods should be
 * shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FromWarehouseInShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FromWarehouseInShipmentDtoFactory factory()
 */
class FromWarehouseInShipmentDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
