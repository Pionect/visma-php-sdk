<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Lot/Serial no. &gt; The lot or serial number of the item.
 */
class LotSerialNumberInAllocationsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
