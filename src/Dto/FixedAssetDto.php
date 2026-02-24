<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an attribute in FixedAssetController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetDtoFactory testFactory()
 */
class FixedAssetDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\FixedAssetDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The id that identifies this fixed asset */
        #[MapName('assetID')]
        public ?string $assetId = null,
        /** The type of the record. This value is 'A' for fixed assets */
        public ?string $recordType = null,
        /** The asset id of the parent of this fixed asset */
        #[MapName('parentAssetID')]
        public ?string $parentAssetId = null,
        /** The description of this fixed asset */
        public ?string $description = null,
        /** The class id of this fixed asset */
        #[MapName('classID')]
        public ?string $classId = null,
        /** Indicates whether this fixed asset is tangible or not */
        public ?bool $isTangible = null,
        /** The quantity of this fixed asset */
        public int|float|null $quantity = null,
        /** Indicates if this fixed asset can be depreciated or not */
        public ?bool $depreciable = null,
        /** Useful life of this fixed asset in years */
        public int|float|null $usefulLife = null,
        public ?AccountsInFixedAssetDto $accounts = null,
        public ?DetailsInFixedAssetDto $details = null,
        public ?BookBalanceInFixedAssetDto $bookBalance = null,
        public ?LocationInFixedAssetDto $location = null,
        public ?PropertyTaxInFixedAssetDto $propertyTax = null,
        public ?TypeInFixedAssetDto $type = null,
        /**
         * A system generated date/time that indicates the last change for this fixed
         * asset
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
