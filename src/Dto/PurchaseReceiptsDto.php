<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptsDtoFactory factory()
 */
class PurchaseReceiptsDto extends Model
{
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
