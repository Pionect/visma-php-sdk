<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateDtoFactory testFactory()
 */
class CurrencyRateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $fromCurrencyId = null,
        public ?string $toCurrencyId = null,
        public ?string $rateType = null,
        public int|float|null $rate = null,
        public ?\Carbon\Carbon $effectiveDate = null,
        public ?string $multDiv = null,
        public int|float|null $rateReciprocal = null,
        public ?string $timeStamp = null,
    ) {}
}
