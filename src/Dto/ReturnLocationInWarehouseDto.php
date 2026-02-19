<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location table tab &gt; RMA location &gt; The RMA warehouse location.
 *
 * @method static \Pionect\VismaSdk\Factories\ReturnLocationInWarehouseDtoFactory testFactory()
 */
class ReturnLocationInWarehouseDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
