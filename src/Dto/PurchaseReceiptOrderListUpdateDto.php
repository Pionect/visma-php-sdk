<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a list of Purchase Orders to add to a Purchase Receipt.
 */
class PurchaseReceiptOrderListUpdateDto extends Model
{
    /** The array of reference numbers of the Purchase Orders. */
    #[Property]
    public ?array $purchaseOrders;
}
