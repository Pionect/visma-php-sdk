<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Landed Cost Line for Purchase Receipt in PurchaseReceiptController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\LandedCostDtoFactory testFactory()
 */
class LandedCostDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?string $landedCostCode = null,
        public ?string $description = null,
        public ?string $purchaseInvoiceNbr = null,
        public ?SupplierInLandedCostDto $supplier = null,
        public ?LocationInLandedCostDto $location = null,
        public ?\Carbon\Carbon $apBillDate = null,
        public ?string $currency = null,
        public int|float|null $amount = null,
        public ?TaxCategoryInLandedCostDto $taxCategory = null,
        public ?TermsInLandedCostDto $terms = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        public ?string $apDocType = null,
        public ?string $apRefNbr = null,
        public ?string $inDocType = null,
        public ?string $inRefNbr = null,
        public ?bool $postponePurchaseInvoiceCreation = null,
    ) {}
}
