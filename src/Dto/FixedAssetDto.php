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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('assetID')]
        public ?string $assetId = null,
        public ?string $recordType = null,
        #[MapName('parentAssetID')]
        public ?string $parentAssetId = null,
        public ?string $description = null,
        #[MapName('classID')]
        public ?string $classId = null,
        public ?bool $isTangible = null,
        public int|float|null $quantity = null,
        public ?bool $depreciable = null,
        public int|float|null $usefulLife = null,
        public ?AccountsInFixedAssetDto $accounts = null,
        public ?DetailsInFixedAssetDto $details = null,
        public ?BookBalanceInFixedAssetDto $bookBalance = null,
        public ?LocationInFixedAssetDto $location = null,
        public ?PropertyTaxInFixedAssetDto $propertyTax = null,
        public ?TypeInFixedAssetDto $type = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
