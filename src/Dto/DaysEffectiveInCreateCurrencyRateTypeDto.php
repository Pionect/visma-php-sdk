<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Days effective.
 */
class DaysEffectiveInCreateCurrencyRateTypeDto extends Model
{
    #[Property]
    public ?int $value;
}
