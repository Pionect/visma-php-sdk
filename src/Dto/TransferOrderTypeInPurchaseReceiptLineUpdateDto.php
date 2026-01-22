<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The type of the transfer order to which this receipt is linked.
 */
class TransferOrderTypeInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
