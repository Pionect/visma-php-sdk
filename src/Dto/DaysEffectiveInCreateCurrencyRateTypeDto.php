<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Days effective.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DaysEffectiveInCreateCurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DaysEffectiveInCreateCurrencyRateTypeDtoFactory factory()
 */
class DaysEffectiveInCreateCurrencyRateTypeDto extends Model
{
    #[Property]
    public ?int $value;
}
