<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The book balance details for this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BookBalanceInFixedAssetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BookBalanceInFixedAssetDtoFactory factory()
 */
class BookBalanceInFixedAssetDto extends Model
{
    public function __construct(
        public int|float|null $acquisitionCost = null,
        #[MapName('depreciationMethodID')]
        public ?string $depreciationMethodId = null,
        public ?\Carbon\Carbon $depreciationFromDate = null,
        public ?string $depreciationFromPeriod = null,
        public ?string $depreciationToPeriod = null,
        public ?string $lastDepreciationPeriod = null,
        public int|float|null $salvageAmount = null,
        public int|float|null $usefulLife = null,
        public ?BookInBookBalanceDto $book = null,
    ) {}
}
