<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierDetailsLineDtoFactory testFactory()
 */
class SupplierDetailsLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierDetailsLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
