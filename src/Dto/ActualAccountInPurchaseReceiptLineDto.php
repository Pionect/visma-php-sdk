<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Accrual account &gt; The accrual account to record the item amount on the
 * purchase receipt; used for stock items and non-stock items for which a receipt is required.
 *
 * @method static \Pionect\VismaSdk\Factories\ActualAccountInPurchaseReceiptLineDtoFactory testFactory()
 */
class ActualAccountInPurchaseReceiptLineDto extends SpatieData
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
