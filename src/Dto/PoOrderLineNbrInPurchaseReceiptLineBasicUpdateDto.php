<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This property replaced by an action please use the following
 * sub-endpoint:/controller/api/v1/PurchaseReceipt/{receiptNumber}/action/addpurchaseorderlines
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PoOrderLineNbrInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PoOrderLineNbrInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class PoOrderLineNbrInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
