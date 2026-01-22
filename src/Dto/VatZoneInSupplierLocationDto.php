<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Location address section &gt; VAT zone &gt; The VAT zone associated
 * with the account location.
 */
class VatZoneInSupplierLocationDto extends Model
{
    /** Click the magnifier. The description for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $description;

    /** Click the magnifier. The Default VAT category for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $defaultVatCategory;

    #[Property]
    public ?\TaxCategoryNumberDescriptionDto $defaultTaxCategory;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
