<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Include in qty. available &gt; You select this check box if the quantities of goods available at
 * this location will be included in the quantities of available goods and used in inventory
 * transactions, such as issues and transfers.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InclQtyAvailInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InclQtyAvailInWarehouseLocationUpdateDtoFactory testFactory()
 */
class InclQtyAvailInWarehouseLocationUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
