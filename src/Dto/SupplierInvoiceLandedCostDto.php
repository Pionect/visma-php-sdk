<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseReceiptsTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostDtoFactory testFactory()
 */
class SupplierInvoiceLandedCostDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Landed Costs Tab > Number at the left indicating the line number of the
         * table.
         */
        public ?int $lineNumber = null,
        /**
         * Landed Costs Tab > Landed cost code > The Landed Cost Code ID lf the Landed
         * Cost Code
         */
        public ?string $landedCostCodeId = null,
        /** Landed Costs Tab > Description > The description of the landed cost */
        public ?string $description = null,
        /** Landed Costs Tab > Amount > The amount of the landed cost */
        public int|float|null $amount = null,
        /** Landed Costs Tab > VAT Category > The ID of VAT cateogry */
        public ?string $vatCategoryId = null,
        /** Landed Costs Tab > Purchase Receipt Type > The purchase receipt type */
        public ?PurchaseReceiptsTypeEnum $purchaseReceiptType = null,
        /**
         * Landed Costs Tab > Purchase order receipt no. > The purchase order receipt
         * number
         */
        public ?string $purcahseOrderReceiptNumber = null,
        /** Landed Costs Tab > Item ID > The ID of the inventory item */
        public ?string $inventoryId = null,
        /** Landed Costs Tab > Warehouse > The ID of the warehouse */
        public ?string $siteId = null,
        /** Landed Costs Tab > Location > The ID of the warehouse location */
        public ?string $locationId = null,
    ) {}
}
