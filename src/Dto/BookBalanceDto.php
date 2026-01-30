<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BookBalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BookBalanceDtoFactory factory()
 */
class BookBalanceDto extends Model
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
