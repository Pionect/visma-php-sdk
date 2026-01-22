<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The extended cost of the item, which is the unit price multiplied by
 * the quantity.
 */
class ExtCostInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
