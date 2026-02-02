<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location table tab &gt; Shipping location &gt; The warehouse location to be used to ship goods.
 *
 * @method static \Pionect\VismaSdk\Factories\ShipLocationInWarehouseDtoFactory testFactory()
 */
class ShipLocationInWarehouseDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
