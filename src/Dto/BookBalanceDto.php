<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BookBalanceDtoFactory testFactory()
 */
class BookBalanceDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BookBalanceDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The acquisition cost of this fixed asset */
        public int|float|null $acquisitionCost = null,
        /** The depreciation method id of this fixed asset */
        #[MapName('depreciationMethodID')]
        public ?string $depreciationMethodId = null,
        /** The date this asset is placed in service */
        public ?\Carbon\Carbon $depreciationFromDate = null,
        /** The first period this fixed asset will start/has started depreciating */
        public ?string $depreciationFromPeriod = null,
        /** The last period this fixed asset will depreciate/ was depreciated */
        public ?string $depreciationToPeriod = null,
        /** The last period this asset has been depreciated */
        public ?string $lastDepreciationPeriod = null,
        /** The salvage amount of this fixed asset */
        public int|float|null $salvageAmount = null,
        /** The useful life of this fixed asset in years */
        public int|float|null $usefulLife = null,
        public ?BookInBookBalanceDto $book = null,
    ) {}
}
