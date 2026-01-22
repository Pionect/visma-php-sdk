<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Receipts allowed &gt; You select this check box if receipts are allowed at this location.
 */
class ReceiptsValidInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
