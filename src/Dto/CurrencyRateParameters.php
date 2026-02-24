<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateParametersFactory testFactory()
 */
class CurrencyRateParameters extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CurrencyRateParametersFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** From effective date. */
        public ?\Carbon\Carbon $fromDate = null,
        /** To effective date. */
        public ?\Carbon\Carbon $toDate = null,
        /** Identifies from currency. */
        public ?string $fromCurrency = null,
        /** Identifies to currency. */
        public ?string $toCurrency = null,
        /** Identifies rate type. */
        public ?string $rateType = null,
    ) {}
}
