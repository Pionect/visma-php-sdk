<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mult/Div.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MultDivInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MultDivInCreateCurrencyRateDtoFactory testFactory()
 */
class MultDivInCreateCurrencyRateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
