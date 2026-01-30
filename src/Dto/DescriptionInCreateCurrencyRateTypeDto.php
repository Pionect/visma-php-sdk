<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Description.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInCreateCurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInCreateCurrencyRateTypeDtoFactory testFactory()
 */
class DescriptionInCreateCurrencyRateTypeDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
