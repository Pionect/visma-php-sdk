<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The code of the line discount that has been applied to this line
 * automatically.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCodeIdInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeIdInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class DiscountCodeIdInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
