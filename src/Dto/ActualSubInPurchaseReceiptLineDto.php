<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Accrual sub. &gt; The subaccount used to record the item amount on the
 * purchase receipt, used for stock items and non-stock items for which a receipt is required.
 *
 * @method static \Pionect\VismaSdk\Factories\ActualSubInPurchaseReceiptLineDtoFactory testFactory()
 */
class ActualSubInPurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
