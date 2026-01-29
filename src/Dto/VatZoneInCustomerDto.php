<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Delivery settings tab &gt; Default location settings section &gt; VAT Zone* &gt;
 * The VAT zone of the customer's default location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInCustomerDtoFactory factory()
 */
class VatZoneInCustomerDto extends Model
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
