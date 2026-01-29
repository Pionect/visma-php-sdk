<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT zone &gt; The VAT zone to be used by default with this entry type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInEntryTypeDtoFactory factory()
 */
class VatZoneInEntryTypeDto extends Model
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
