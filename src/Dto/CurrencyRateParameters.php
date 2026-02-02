<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateParametersFactory testFactory()
 */
class CurrencyRateParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $fromDate = null,
        public ?\Carbon\Carbon $toDate = null,
        public ?string $fromCurrency = null,
        public ?string $toCurrency = null,
        public ?string $rateType = null,
    ) {}
}
