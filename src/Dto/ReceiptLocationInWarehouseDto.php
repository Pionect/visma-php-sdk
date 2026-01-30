<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location table tab &gt; Receiving location &gt; The warehouse location to be used to receive goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReceiptLocationInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReceiptLocationInWarehouseDtoFactory factory()
 */
class ReceiptLocationInWarehouseDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
