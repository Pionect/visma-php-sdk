<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostDtoFactory testFactory()
 */
class SupplierInvoiceLandedCostDto extends Model
{
    public function __construct(
        public ?int $lineNumber = null,
        public ?string $landedCostCodeId = null,
        public ?string $description = null,
        public int|float|null $amount = null,
        public ?string $vatCategoryId = null,
        public ?string $purchaseReceiptType = null,
        public ?string $purcahseOrderReceiptNumber = null,
        public ?string $inventoryId = null,
        public ?string $siteId = null,
        public ?string $locationId = null,
    ) {}
}
