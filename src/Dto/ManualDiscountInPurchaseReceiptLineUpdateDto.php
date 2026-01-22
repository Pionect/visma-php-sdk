<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; A check box that indicates (if selected) that the discount has been
 * applied manually.
 */
class ManualDiscountInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
