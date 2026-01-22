<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * To currency id.
 */
class ToCurrencyIdInCreateCurrencyRateDto extends Model
{
    #[Property]
    public ?string $value;
}
