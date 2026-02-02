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
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
