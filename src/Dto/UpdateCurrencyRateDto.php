<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UpdateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UpdateCurrencyRateDtoFactory testFactory()
 */
class UpdateCurrencyRateDto extends Model
{
    public function __construct(
        public ?RateInUpdateCurrencyRateDto $rate = null,
        public ?MultDivInUpdateCurrencyRateDto $multDiv = null,
    ) {}
}
