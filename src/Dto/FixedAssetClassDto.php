<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an attribute in FixedAssetClass. Used for getting data.
 */
class FixedAssetClassDto extends Model
{
    /** The id that identifies this fixed asset class */
    #[Property]
    public ?string $classId;

    /** The type of the record. This value is 'C' for fixed asset classes */
    #[Property]
    public ?string $recordType;

    /** The description of this fixed asset class */
    #[Property]
    public ?string $description;

    /** Indicates whether this fixed asset class is active or not */
    #[Property]
    public ?bool $active;

    /** The type id of this fixed asset class */
    #[Property]
    public ?string $assetTypeId;

    /** Indicates whether the fixed asset using this fixed asset class is tangible or not by default */
    #[Property]
    public ?bool $isTangible;

    /** Indicates whether the fixed asset using this fixed asset class can be depreciated or not by default */
    #[Property]
    public ?bool $depreciable;

    /** Default useful life in years of the fixed asset using this fixed asset class */
    #[Property]
    public ?float $usefulLife;

    /** Indicates whether the fixed asset using this fixed asset class will use accelerated depreciation depending on selected depreciation method */
    #[Property]
    public ?bool $acceleratedDepreciation;

    #[Property]
    public ?\bookSettingsInFixedAssetClassDto $bookSettings;

    #[Property]
    public ?\accountsInFixedAssetClassDto $accounts;

    /** The sub account mask for this fixed asset class */
    #[Property]
    public ?string $subAccountMask;

    /** The accumulated depreciation sub account mask for this fixed asset class */
    #[Property]
    public ?string $accumulatedDepreciationSubAccountMask;

    /** The depreciated expense sub account mask for this fixed asset class */
    #[Property]
    public ?string $depreciatedExpenseSubAccountMask;

    /** The proceed sub account mask for this fixed asset class */
    #[Property]
    public ?string $proceedSubAccountMask;

    /** The gain/loss sub account mask for this fixed asset class */
    #[Property]
    public ?string $gainLossSubAccountMask;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
