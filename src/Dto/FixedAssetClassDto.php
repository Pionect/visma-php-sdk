<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents an attribute in FixedAssetClass. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetClassDtoFactory factory()
 */
class FixedAssetClassDto extends Model
{
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
