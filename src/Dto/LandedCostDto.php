<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\LandedCostApDocTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Landed Cost Line for Purchase Receipt in PurchaseReceiptController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\LandedCostDtoFactory testFactory()
 */
class LandedCostDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LandedCostDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Landed costs tab > Line number */
        public ?int $lineNbr = null,
        /**
         * Mandatory field: Landed costs tab > Landed costs* > Landed cost code > The
         * landed cost code associated with the landed costs incurred for this purchase
         * or transfer receipt.
         */
        public ?string $landedCostCode = null,
        /**
         * Mandatory field: Landed costs tab > Description* > The description of the
         * landed cost code.
         */
        public ?string $description = null,
        public ?string $purchaseInvoiceNbr = null,
        public ?SupplierInLandedCostDto $supplier = null,
        public ?LocationInLandedCostDto $location = null,
        /**
         * Landed costs tab > Purchase invoice date > The date of the purchase invoice
         * for the landed cost.
         */
        public ?\Carbon\Carbon $apBillDate = null,
        /** Landed costs tab > Currency > The currency used for the landed cost. */
        public ?string $currency = null,
        /** Landed costs tab > Amount > A non-zero amount of the landed cost. */
        public int|float|null $amount = null,
        public ?TaxCategoryInLandedCostDto $taxCategory = null,
        public ?TermsInLandedCostDto $terms = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        /**
         * Landed costs tab > Supplier document type > The type of the supplier document
         * generated for the landed cost.
         */
        public ?LandedCostApDocTypeEnum $apDocType = null,
        /**
         * Landed costs tab > Supplier ref. > The reference number of the supplier
         * document generated for the landed cost.
         */
        public ?string $apRefNbr = null,
        /**
         * Landed costs tab > Inventory doc. type > The type of the document generated
         * in the Inventory workspace for this landed cost.
         */
        public ?CashSaleDocumentTypeEnum $inDocType = null,
        /**
         * Landed costs tab > Inventory ref. no. > The reference number of the document
         * generated in the Inventory workspace for this landed cost.
         */
        public ?string $inRefNbr = null,
        /**
         * Landed costs tab > Postpone creation of purchase invoice > A check box that
         * indicates (if selected) that a related supplier ledger invoice for the
         * incurred landed costs must be created later.
         */
        public ?bool $postponePurchaseInvoiceCreation = null,
    ) {}
}
