<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency effective date.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EffectiveDateInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EffectiveDateInCreateCurrencyRateDtoFactory testFactory()
 */
class EffectiveDateInCreateCurrencyRateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $value = null,
    ) {}
}
