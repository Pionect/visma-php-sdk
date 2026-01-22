<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The type of the purchase receipt line.
 */
class LineTypeInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
