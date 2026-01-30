<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Days effective.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DaysEffectiveInCreateCurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DaysEffectiveInCreateCurrencyRateTypeDtoFactory testFactory()
 */
class DaysEffectiveInCreateCurrencyRateTypeDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
