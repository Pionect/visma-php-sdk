<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptsDtoFactory testFactory()
 */
class PurchaseReceiptsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $receiptNumber = null,
        public ?string $status = null,
        public ?string $supplierName = null,
        public ?string $currency = null,
        public int|float|null $totalQty = null,
        public int|float|null $totalAmt = null,
    ) {}
}
