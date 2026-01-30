<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Supplier info tab &gt; The Info section &gt; Supplier VAT zone &gt; The VAT zone of the supplier's
 * location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierVatZoneInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierVatZoneInPurchaseOrderDtoFactory testFactory()
 */
class SupplierVatZoneInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
