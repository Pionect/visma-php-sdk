<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CreateCurrencyRateDto extends Model
{
    #[Property]
    public ?fromCurrencyIdInCreateCurrencyRateDto $fromCurrencyId;

    #[Property]
    public ?toCurrencyIdInCreateCurrencyRateDto $toCurrencyId;

    #[Property]
    public ?rateTypeInCreateCurrencyRateDto $rateType;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;

    #[Property]
    public ?rateInCreateCurrencyRateDto $rate;

    #[Property]
    public ?multDivInCreateCurrencyRateDto $multDiv;
}
