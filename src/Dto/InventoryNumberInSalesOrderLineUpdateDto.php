<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryNumberInSalesOrderLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryNumberInSalesOrderLineUpdateDtoFactory testFactory()
 */
class InventoryNumberInSalesOrderLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
