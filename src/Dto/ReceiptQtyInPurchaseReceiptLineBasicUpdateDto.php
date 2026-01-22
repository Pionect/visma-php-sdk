<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The quantity of the item in the specified UoM that has been received
 * (listed on released receipts).
 */
class ReceiptQtyInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
