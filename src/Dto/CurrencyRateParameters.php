<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyRateParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateParametersFactory factory()
 */
class CurrencyRateParameters extends Model
{
    /** From effective date. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $fromDate;

    /** To effective date. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $toDate;

    /** Identifies from currency. */
    #[Property]
    public ?string $fromCurrency;

    /** Identifies to currency. */
    #[Property]
    public ?string $toCurrency;

    /** Identifies rate type. */
    #[Property]
    public ?string $rateType;
}
