<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Include in qty. available &gt; You select this check box if the quantities of goods available at
 * this location will be included in the quantities of available goods and used in inventory
 * transactions, such as issues and transfers.
 */
class InclQtyAvailInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
