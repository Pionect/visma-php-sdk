<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The item ID of the received item.
 */
class InventoryIdInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
