<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Sub ID &gt; The subaccount to be used to record the non-stock item amount
 * on the purchase receipt (for non-stock items for which receipts are not required).
 *
 * @method static \Pionect\VismaSdk\Factories\SubInPurchaseReceiptLineDtoFactory testFactory()
 */
class SubInPurchaseReceiptLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SubInPurchaseReceiptLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
