<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseReceiptsStatusEnum;
use Pionect\VismaSdk\Enums\PurchaseReceiptsTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptsDtoFactory testFactory()
 */
class PurchaseReceiptsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The top part > Type > The type of the document, which can be Receipt, Return,
         * or Transfer receipt.
         */
        public ?PurchaseReceiptsTypeEnum $type = null,
        /**
         * The top part > Receipt no. > The unique reference number of the purchase
         * receipt, transfer receipt, or return, which the system automatically assigns
         * according to its number series.
         */
        public ?string $receiptNumber = null,
        /**
         * The top part > Status > The current status of the purchase or transfer
         * receipt, or return, which the system assigns automatically.
         */
        public ?PurchaseReceiptsStatusEnum $status = null,
        /**
         * The top part > Supplier > The supplier from which the items have been
         * received or to which they will be returned.
         */
        public ?string $supplierName = null,
        /** The top part > Currency > The currency the supplier uses for invoicing. */
        public ?string $currency = null,
        /**
         * The top part > Total qty. > The total quantity of items received from or
         * returned to the supplier; the sum of all quantities of all stock items listed
         * on the Document details tab.
         */
        public int|float|null $totalQty = null,
        /**
         * The top part > Total amt. > The total amount calculated for items received
         * from or returned to the supplier; the sum of all amounts of all stock items
         * listed on the Document details tab.
         */
        public int|float|null $totalAmt = null,
    ) {}
}
