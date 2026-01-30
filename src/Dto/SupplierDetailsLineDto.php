<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierDetailsLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierDetailsLineDtoFactory testFactory()
 */
class SupplierDetailsLineDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?bool $default = null,
        public ?string $supplierId = null,
        public ?string $supplierName = null,
        public ?string $location = null,
        public ?string $warehouse = null,
        public ?string $purchaseUnit = null,
        public ?string $supplierItemId = null,
        public ?int $shipmentLeadTime = null,
        public ?int $leadTime = null,
        public ?int $minOrderFreq = null,
        public int|float|null $minOrderQty = null,
        public int|float|null $maxOrderQty = null,
        public int|float|null $lotSize = null,
        public int|float|null $eoq = null,
        public ?string $currencyId = null,
        public int|float|null $lastSupplierPrice = null,
        public ?bool $override = null,
    ) {}
}
