<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location table tab &gt; Receiving location &gt; The warehouse location to be used to receive goods.
 *
 * @method static \Pionect\VismaSdk\Factories\ReceiptLocationInWarehouseDtoFactory testFactory()
 */
class ReceiptLocationInWarehouseDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
