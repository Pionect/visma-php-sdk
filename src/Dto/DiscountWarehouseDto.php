<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountWarehouseDtoFactory factory()
 */
class DiscountWarehouseDto extends Model
{
    #[Property]
    public ?string $warehouse;
}
