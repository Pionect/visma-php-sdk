<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location table tab &gt; Drop-ship location &gt; The warehouse location used to account for drop
 * shipments.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DropShipLocationInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DropShipLocationInWarehouseDtoFactory factory()
 */
class DropShipLocationInWarehouseDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
