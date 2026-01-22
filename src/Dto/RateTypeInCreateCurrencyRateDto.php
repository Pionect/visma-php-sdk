<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate type.
 */
class RateTypeInCreateCurrencyRateDto extends Model
{
    #[Property]
    public ?string $value;
}
