<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mult/Div.
 */
class MultDivInUpdateCurrencyRateDto extends Model
{
    #[Property]
    public ?string $value;
}
