<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Discount code &gt; The code of the line discount that has been applied to
 * this line automatically.
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeInPurchaseReceiptLineDtoFactory testFactory()
 */
class DiscountCodeInPurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
