<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The line number in the transfer order to which this receipt is linked.
 */
class TransferOrderLineNbrInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
