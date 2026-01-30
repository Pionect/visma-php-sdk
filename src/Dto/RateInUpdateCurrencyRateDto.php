<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateInUpdateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateInUpdateCurrencyRateDtoFactory factory()
 */
class RateInUpdateCurrencyRateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
