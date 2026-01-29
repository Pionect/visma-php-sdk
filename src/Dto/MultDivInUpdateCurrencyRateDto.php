<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mult/Div.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MultDivInUpdateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MultDivInUpdateCurrencyRateDtoFactory factory()
 */
class MultDivInUpdateCurrencyRateDto extends Model
{
    #[Property]
    public ?string $value;
}
