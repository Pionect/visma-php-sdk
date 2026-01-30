<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateCurrencyRateDtoFactory testFactory()
 */
class CreateCurrencyRateDto extends Model
{
    public function __construct(
        public ?FromCurrencyIdInCreateCurrencyRateDto $fromCurrencyId = null,
        public ?ToCurrencyIdInCreateCurrencyRateDto $toCurrencyId = null,
        public ?RateTypeInCreateCurrencyRateDto $rateType = null,
        public ?EffectiveDateInCreateCurrencyRateDto $effectiveDate = null,
        public ?RateInCreateCurrencyRateDto $rate = null,
        public ?MultDivInCreateCurrencyRateDto $multDiv = null,
    ) {}
}
