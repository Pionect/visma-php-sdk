<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Transfers allowed &gt; You select this check box if transfers are allowed for this location.
 */
class TransfersValidInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
