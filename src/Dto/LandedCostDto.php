<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Landed Cost Line for Purchase Receipt in PurchaseReceiptController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LandedCostDtoFactory factory()
 */
class LandedCostDto extends Model
{
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
