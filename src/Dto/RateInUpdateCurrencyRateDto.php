<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate.
 */
class RateInUpdateCurrencyRateDto extends Model
{
    #[Property]
    public ?float $value;
}
