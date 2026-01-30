<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This property replaced by an action, please use the following
 * sub-endpoint:/controller/api/v1/PurchaseReceipt/{receiptNumber}/action/addpurchaseorder.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PoOrderNbrInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PoOrderNbrInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class PoOrderNbrInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
