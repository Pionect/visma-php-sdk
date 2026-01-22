<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * InventoryId is deprecated, please use InventoryNumber instead.
 */
class InventoryIdInSalesOrderLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
