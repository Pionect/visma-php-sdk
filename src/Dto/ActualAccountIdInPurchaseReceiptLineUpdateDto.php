<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The accrual account to record the item amount on the purchase receipt;
 * used for stock items and non-stock items for which a receipt is required.
 */
class ActualAccountIdInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
