<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Description.
 */
class DescriptionInCreateCurrencyRateTypeDto extends Model
{
    #[Property]
    public ?string $value;
}
