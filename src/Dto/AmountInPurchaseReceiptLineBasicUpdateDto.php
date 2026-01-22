<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The amount calculated (after discount has been taken) for the item.
 */
class AmountInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
