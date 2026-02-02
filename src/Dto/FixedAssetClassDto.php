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
        #[MapName('classID')]
        public ?string $classId = null,
        public ?string $recordType = null,
        public ?string $description = null,
        public ?bool $active = null,
        #[MapName('assetTypeID')]
        public ?string $assetTypeId = null,
        public ?bool $isTangible = null,
        public ?bool $depreciable = null,
        public int|float|null $usefulLife = null,
        public ?bool $acceleratedDepreciation = null,
        public ?BookSettingsInFixedAssetClassDto $bookSettings = null,
        public ?AccountsInFixedAssetClassDto $accounts = null,
        public ?string $subAccountMask = null,
        public ?string $accumulatedDepreciationSubAccountMask = null,
        public ?string $depreciatedExpenseSubAccountMask = null,
        public ?string $proceedSubAccountMask = null,
        public ?string $gainLossSubAccountMask = null,
        public ?string $errorInfo = null,
    ) {}
}
