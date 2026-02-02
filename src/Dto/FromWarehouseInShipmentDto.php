<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Warehouse ID* &gt; The warehouse from which the goods should be
 * shipped.
 *
 * @method static \Pionect\VismaSdk\Factories\FromWarehouseInShipmentDtoFactory testFactory()
 */
class FromWarehouseInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
