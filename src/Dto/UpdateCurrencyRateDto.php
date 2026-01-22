<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class UpdateCurrencyRateDto extends Model
{
    #[Property]
    public ?\rateInUpdateCurrencyRateDto $rate;

    #[Property]
    public ?\multDivInUpdateCurrencyRateDto $multDiv;
}
