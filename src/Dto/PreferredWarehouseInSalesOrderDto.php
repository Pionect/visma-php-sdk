<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Delivery settings tab &gt; The shipping information section &gt; Preferred warehouse ID
 *
 * @method static \Pionect\VismaSdk\Factories\PreferredWarehouseInSalesOrderDtoFactory testFactory()
 */
class PreferredWarehouseInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
