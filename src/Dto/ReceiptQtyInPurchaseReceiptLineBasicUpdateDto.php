<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The quantity of the item in the specified UoM that has been received
 * (listed on released receipts).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReceiptQtyInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReceiptQtyInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class ReceiptQtyInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
