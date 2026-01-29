<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateDtoFactory factory()
 */
class CurrencyRateDto extends Model
{
    /** Currency rate Id. */
    #[Property]
    public ?int $id;

    /** From Currency Id. */
    #[Property]
    public ?string $fromCurrencyId;

    /** To Currency Id. */
    #[Property]
    public ?string $toCurrencyId;

    /** Currency rate type. */
    #[Property]
    public ?string $rateType;

    /** Currency rate. */
    #[Property]
    public ?float $rate;

    /** EffectiveDate */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;

    /** Mult/Div */
    #[Property]
    public ?string $multDiv;

    /** Rate reciprocal */
    #[Property]
    public ?float $rateReciprocal;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
