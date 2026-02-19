<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Account &gt; The account used to record the item amount on the purchase
 * receipt;
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInPurchaseReceiptLineDtoFactory testFactory()
 */
class AccountInPurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
