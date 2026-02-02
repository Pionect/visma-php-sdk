<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; The VAT section &gt; Supplier VAT Zone &gt; The VAT zone of the
 * supplier, which is specified in the  AP303000 window.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierTaxZoneInSupplierInvoiceDtoFactory testFactory()
 */
class SupplierTaxZoneInSupplierInvoiceDto extends SpatieData
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
