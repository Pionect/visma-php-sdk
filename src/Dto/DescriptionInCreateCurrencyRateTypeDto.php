<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Description.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInCreateCurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInCreateCurrencyRateTypeDtoFactory factory()
 */
class DescriptionInCreateCurrencyRateTypeDto extends Model
{
    #[Property]
    public ?string $value;
}
