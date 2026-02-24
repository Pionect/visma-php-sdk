<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateDtoFactory testFactory()
 */
class CurrencyRateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CurrencyRateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Currency rate Id. */
        public ?int $id = null,
        /** From Currency Id. */
        public ?string $fromCurrencyId = null,
        /** To Currency Id. */
        public ?string $toCurrencyId = null,
        /** Currency rate type. */
        public ?string $rateType = null,
        /** Currency rate. */
        public int|float|null $rate = null,
        /** EffectiveDate */
        public ?\Carbon\Carbon $effectiveDate = null,
        /** Mult/Div */
        public ?string $multDiv = null,
        /** Rate reciprocal */
        public int|float|null $rateReciprocal = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
    ) {}
}
