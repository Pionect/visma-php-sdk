<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The property tax group this fixed asset is conntected to
 */
class PropertyTaxInFixedAssetDto extends Model
{
    /** The property tax group id of this fixed asset */
    #[Property]
    public ?string $propertyTaxId;

    /** The description of the property tax group of this fixed asset */
    #[Property]
    public ?string $description;
}
