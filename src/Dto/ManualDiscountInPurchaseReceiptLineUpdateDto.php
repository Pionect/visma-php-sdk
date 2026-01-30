<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; A check box that indicates (if selected) that the discount has been
 * applied manually.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ManualDiscountInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ManualDiscountInPurchaseReceiptLineUpdateDtoFactory testFactory()
 */
class ManualDiscountInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
