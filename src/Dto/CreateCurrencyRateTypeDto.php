<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CreateCurrencyRateTypeDto extends Model
{
    #[Property]
    public ?\idInCreateCurrencyRateTypeDto $id;

    #[Property]
    public ?\descriptionInCreateCurrencyRateTypeDto $description;

    #[Property]
    public ?\daysEffectiveInCreateCurrencyRateTypeDto $daysEffective;
}
