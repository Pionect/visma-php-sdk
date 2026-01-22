<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BranchId is deprecated, please use BranchNumber instead.
 */
class BranchIdInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
