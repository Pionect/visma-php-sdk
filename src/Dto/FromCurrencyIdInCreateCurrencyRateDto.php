<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * From currency id.
 */
class FromCurrencyIdInCreateCurrencyRateDto extends Model
{
    #[Property]
    public ?string $value;
}
