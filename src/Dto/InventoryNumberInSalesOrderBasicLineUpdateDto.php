<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryNumberInSalesOrderBasicLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryNumberInSalesOrderBasicLineUpdateDtoFactory factory()
 */
class InventoryNumberInSalesOrderBasicLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
