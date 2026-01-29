<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** Click the magnifier. The identifier for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $id;

    /** Click the magnifier. The description for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $description;

    /** Click the magnifier. The Default VAT category for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $defaultVatCategory;

    #[Property]
    public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory;

    #[Property]
    public ?string $errorInfo;
}
