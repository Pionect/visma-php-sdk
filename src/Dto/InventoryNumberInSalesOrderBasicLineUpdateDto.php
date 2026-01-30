<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryNumberInSalesOrderBasicLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryNumberInSalesOrderBasicLineUpdateDtoFactory testFactory()
 */
class InventoryNumberInSalesOrderBasicLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
