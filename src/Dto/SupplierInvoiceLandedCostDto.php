<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostDtoFactory testFactory()
 */
class SupplierInvoiceLandedCostDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
