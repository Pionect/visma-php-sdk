<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mult/Div.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MultDivInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MultDivInCreateCurrencyRateDtoFactory factory()
 */
class MultDivInCreateCurrencyRateDto extends Model
{
    #[Property]
    public ?string $value;
}
