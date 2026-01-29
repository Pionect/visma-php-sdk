<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateTypeInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateTypeInCreateCurrencyRateDtoFactory factory()
 */
class RateTypeInCreateCurrencyRateDto extends Model
{
    #[Property]
    public ?string $value;
}
