<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Country &gt; The country.
 */
class CountryInPurchaseOrderAddressDto extends Model
{
    /** Mandatory field: Country name* &gt; The complete name of the country. */
    #[Property]
    public ?string $name;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
