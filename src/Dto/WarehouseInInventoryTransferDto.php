<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; From warehouse* &gt; The warehouse from which the goods are
 * transferred.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryTransferDtoFactory testFactory()
 */
class WarehouseInInventoryTransferDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
