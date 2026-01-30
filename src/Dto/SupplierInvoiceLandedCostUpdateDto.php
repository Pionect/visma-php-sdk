<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostUpdateDtoFactory factory()
 */
class SupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        public ?LineNumberInSupplierInvoiceLandedCostUpdateDto $lineNumber = null,
        public ?LandedCostCodeIdInSupplierInvoiceLandedCostUpdateDto $landedCostCodeId = null,
        public ?DescriptionInSupplierInvoiceLandedCostUpdateDto $description = null,
        public ?AmountInSupplierInvoiceLandedCostUpdateDto $amount = null,
        public ?TaxCategoryIdInSupplierInvoiceLandedCostUpdateDto $taxCategoryId = null,
        public ?PoReceiptNumberInSupplierInvoiceLandedCostUpdateDto $poReceiptNumber = null,
        public ?InventoryIdInSupplierInvoiceLandedCostUpdateDto $inventoryId = null,
        public ?SiteIdInSupplierInvoiceLandedCostUpdateDto $siteId = null,
        public ?LocationIdInSupplierInvoiceLandedCostUpdateDto $locationId = null,
    ) {}
}
