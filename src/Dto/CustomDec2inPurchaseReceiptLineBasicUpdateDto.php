<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type decimal with max 4 decimals.
 */
class CustomDec2inPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
