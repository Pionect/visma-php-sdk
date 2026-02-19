<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Discount code &gt; The code of the line discount that has been applied to this line automatically.
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeInPurchaseOrderLineDtoFactory testFactory()
 */
class DiscountCodeInPurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
