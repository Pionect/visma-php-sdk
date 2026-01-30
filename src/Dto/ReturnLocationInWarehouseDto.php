<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location table tab &gt; RMA location &gt; The RMA warehouse location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReturnLocationInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReturnLocationInWarehouseDtoFactory factory()
 */
class ReturnLocationInWarehouseDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
