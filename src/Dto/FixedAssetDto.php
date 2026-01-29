<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an attribute in FixedAssetController. Used for getting data.
 */
class FixedAssetDto extends Model
{
    /** The id that identifies this fixed asset */
    #[Property]
    public ?string $assetId;

    /** The type of the record. This value is 'A' for fixed assets */
    #[Property]
    public ?string $recordType;

    /** The asset id of the parent of this fixed asset */
    #[Property]
    public ?string $parentAssetId;

    /** The description of this fixed asset */
    #[Property]
    public ?string $description;

    /** The class id of this fixed asset */
    #[Property]
    public ?string $classId;

    /** Indicates whether this fixed asset is tangible or not */
    #[Property]
    public ?bool $isTangible;

    /** The quantity of this fixed asset */
    #[Property]
    public ?float $quantity;

    /** Indicates if this fixed asset can be depreciated or not */
    #[Property]
    public ?bool $depreciable;

    /** Useful life of this fixed asset in years */
    #[Property]
    public ?float $usefulLife;

    #[Property]
    public ?accountsInFixedAssetDto $accounts;

    #[Property]
    public ?detailsInFixedAssetDto $details;

    #[Property]
    public ?bookBalanceInFixedAssetDto $bookBalance;

    #[Property]
    public ?locationInFixedAssetDto $location;

    #[Property]
    public ?propertyTaxInFixedAssetDto $propertyTax;

    #[Property]
    public ?typeInFixedAssetDto $type;

    /** A system generated date/time that indicates the last change for this fixed asset */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;
}
