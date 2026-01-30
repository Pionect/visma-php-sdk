<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateDtoFactory factory()
 */
class CurrencyRateDto extends Model
{
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
