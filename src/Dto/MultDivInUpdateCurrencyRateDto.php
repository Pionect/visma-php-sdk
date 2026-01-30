<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mult/Div.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MultDivInUpdateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MultDivInUpdateCurrencyRateDtoFactory testFactory()
 */
class MultDivInUpdateCurrencyRateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
