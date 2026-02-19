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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
