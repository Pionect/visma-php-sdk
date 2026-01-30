<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Delivery settings tab &gt; The shipping information section &gt; Preferred warehouse ID
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PreferredWarehouseInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PreferredWarehouseInSalesOrderDtoFactory factory()
 */
class PreferredWarehouseInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
