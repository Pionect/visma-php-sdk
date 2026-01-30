<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The VAT section &gt; Supplier VAT Zone &gt; The VAT zone of the
 * supplier, which is specified in the  AP303000 window.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierTaxZoneInSupplierInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierTaxZoneInSupplierInvoiceDtoFactory factory()
 */
class SupplierTaxZoneInSupplierInvoiceDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
