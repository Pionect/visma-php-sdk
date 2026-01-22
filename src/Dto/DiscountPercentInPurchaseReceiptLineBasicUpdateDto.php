<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The automatically calculated or manually entered discount percent on
 * the line.
 */
class DiscountPercentInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
