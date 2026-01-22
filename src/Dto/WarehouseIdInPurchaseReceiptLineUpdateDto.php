<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The warehouse where the item has been received.
 */
class WarehouseIdInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
