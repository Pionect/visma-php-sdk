<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an attribute in FixedAssetClass. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetClassDtoFactory testFactory()
 */
class FixedAssetClassDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The id that identifies this fixed asset class */
        #[MapName('classID')]
        public ?string $classId = null,
        /** The type of the record. This value is 'C' for fixed asset classes */
        public ?string $recordType = null,
        /** The description of this fixed asset class */
        public ?string $description = null,
        /** Indicates whether this fixed asset class is active or not */
        public ?bool $active = null,
        /** The type id of this fixed asset class */
        #[MapName('assetTypeID')]
        public ?string $assetTypeId = null,
        /**
         * Indicates whether the fixed asset using this fixed asset class is tangible or
         * not by default
         */
        public ?bool $isTangible = null,
        /**
         * Indicates whether the fixed asset using this fixed asset class can be
         * depreciated or not by default
         */
        public ?bool $depreciable = null,
        /** Default useful life in years of the fixed asset using this fixed asset class */
        public int|float|null $usefulLife = null,
        /**
         * Indicates whether the fixed asset using this fixed asset class will use
         * accelerated depreciation depending on selected depreciation method
         */
        public ?bool $acceleratedDepreciation = null,
        public ?BookSettingsInFixedAssetClassDto $bookSettings = null,
        public ?AccountsInFixedAssetClassDto $accounts = null,
        /** The sub account mask for this fixed asset class */
        public ?string $subAccountMask = null,
        /** The accumulated depreciation sub account mask for this fixed asset class */
        public ?string $accumulatedDepreciationSubAccountMask = null,
        /** The depreciated expense sub account mask for this fixed asset class */
        public ?string $depreciatedExpenseSubAccountMask = null,
        /** The proceed sub account mask for this fixed asset class */
        public ?string $proceedSubAccountMask = null,
        /** The gain/loss sub account mask for this fixed asset class */
        public ?string $gainLossSubAccountMask = null,
        public ?string $errorInfo = null,
    ) {}
}
