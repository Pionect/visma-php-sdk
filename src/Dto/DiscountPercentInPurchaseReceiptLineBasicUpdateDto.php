<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The automatically calculated or manually entered discount percent on
 * the line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountPercentInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountPercentInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class DiscountPercentInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
