<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency effective date.
 */
class EffectiveDateInCreateCurrencyRateDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $value;
}
