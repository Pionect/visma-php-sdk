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
        /**
         * Click the magnifier. The identifier for the VAT zone of the supplier, which
         * is specified in the  AP303000 window.
         */
        public ?string $id = null,
        /**
         * Click the magnifier. The description for the VAT zone of the supplier, which
         * is specified in the  AP303000 window.
         */
        public ?string $description = null,
        /**
         * Click the magnifier. The Default VAT category for the VAT zone of the
         * supplier, which is specified in the  AP303000 window.
         */
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
