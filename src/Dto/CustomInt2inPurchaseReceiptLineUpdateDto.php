<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 */
class CustomInt2inPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
