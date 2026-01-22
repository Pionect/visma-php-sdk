<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This property replaced by an action please use the following
 * sub-endpoint:/controller/api/v1/PurchaseReceipt/{receiptNumber}/action/addpurchaseorderlines
 */
class PoOrderLineNbrInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
