<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The automatically calculated or manually entered discount amount on
 * the line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountAmountInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountAmountInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class DiscountAmountInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
