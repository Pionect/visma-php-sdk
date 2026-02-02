<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BookBalanceDtoFactory testFactory()
 */
class BookBalanceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
