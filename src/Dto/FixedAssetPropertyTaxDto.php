<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an attribute in FixedAssetPropertyTaxGroup. Used for getting data.
 */
class FixedAssetPropertyTaxDto extends Model
{
    /** The property tax id of this property tax group */
    #[Property]
    public ?string $propertyTaxId;

    /** The description of this property tax group */
    #[Property]
    public ?string $description;

    /** A flag that indicates whether this fixed asset property tax group is active. */
    #[Property]
    public ?bool $active;

    /** Fixed Asset Property Tax Details */
    #[Property]
    public ?array $details;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
