<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The amount calculated (after discount has been taken) for the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AmountInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AmountInPurchaseReceiptLineBasicUpdateDtoFactory testFactory()
 */
class AmountInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
