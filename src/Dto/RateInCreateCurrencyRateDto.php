<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateInCreateCurrencyRateDtoFactory testFactory()
 */
class RateInCreateCurrencyRateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
