<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountWarehouseDtoFactory factory()
 */
class DiscountWarehouseDto extends Model
{
    public function __construct(
        public ?string $warehouse = null,
    ) {}
}
