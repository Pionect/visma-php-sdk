<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UpdateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UpdateCurrencyRateDtoFactory factory()
 */
class UpdateCurrencyRateDto extends Model
{
    #[Property]
    public ?rateInUpdateCurrencyRateDto $rate;

    #[Property]
    public ?multDivInUpdateCurrencyRateDto $multDiv;
}
