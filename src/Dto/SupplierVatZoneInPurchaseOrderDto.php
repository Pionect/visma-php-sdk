<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Supplier info tab &gt; The Info section &gt; Supplier VAT zone &gt; The VAT zone of the supplier's
 * location.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierVatZoneInPurchaseOrderDtoFactory testFactory()
 */
class SupplierVatZoneInPurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
