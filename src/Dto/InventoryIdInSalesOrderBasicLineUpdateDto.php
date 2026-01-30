<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * InventoryId is deprecated, please use InventoryNumber instead.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryIdInSalesOrderBasicLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIdInSalesOrderBasicLineUpdateDtoFactory factory()
 */
class InventoryIdInSalesOrderBasicLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
