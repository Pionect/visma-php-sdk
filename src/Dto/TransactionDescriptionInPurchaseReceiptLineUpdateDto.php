<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The description of the receipt or return transaction.
 */
class TransactionDescriptionInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
