<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 */
class CustomInt2inPurchaseOrderLineUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
