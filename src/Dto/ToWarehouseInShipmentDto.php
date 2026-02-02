<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; To warehouse &gt; The warehouse to which the goods should be shipped in case of a
 * transfer.
 *
 * @method static \Pionect\VismaSdk\Factories\ToWarehouseInShipmentDtoFactory testFactory()
 */
class ToWarehouseInShipmentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
