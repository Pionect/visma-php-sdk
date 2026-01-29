<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RateInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RateInCreateCurrencyRateDtoFactory factory()
 */
class RateInCreateCurrencyRateDto extends Model
{
    #[Property]
    public ?float $value;
}
