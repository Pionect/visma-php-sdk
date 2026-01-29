<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreateCurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreateCurrencyRateTypeDtoFactory factory()
 */
class CreateCurrencyRateTypeDto extends Model
{
    #[Property]
    public ?idInCreateCurrencyRateTypeDto $id;

    #[Property]
    public ?descriptionInCreateCurrencyRateTypeDto $description;

    #[Property]
    public ?daysEffectiveInCreateCurrencyRateTypeDto $daysEffective;
}
