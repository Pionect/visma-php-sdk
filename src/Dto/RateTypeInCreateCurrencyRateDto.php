<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateTypeInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateTypeInCreateCurrencyRateDtoFactory testFactory()
 */
class RateTypeInCreateCurrencyRateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
