<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateCurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateCurrencyRateTypeDtoFactory testFactory()
 */
class CreateCurrencyRateTypeDto extends Model
{
    public function __construct(
        public ?IdInCreateCurrencyRateTypeDto $id = null,
        public ?DescriptionInCreateCurrencyRateTypeDto $description = null,
        public ?DaysEffectiveInCreateCurrencyRateTypeDto $daysEffective = null,
    ) {}
}
