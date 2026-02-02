<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location table tab &gt; Drop-ship location &gt; The warehouse location used to account for drop
 * shipments.
 *
 * @method static \Pionect\VismaSdk\Factories\DropShipLocationInWarehouseDtoFactory testFactory()
 */
class DropShipLocationInWarehouseDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
