<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The number of the branch to which the purchase receipt line belongs.
 */
class BranchNumberInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
