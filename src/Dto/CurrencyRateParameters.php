<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyRateParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateParametersFactory testFactory()
 */
class CurrencyRateParameters extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $fromDate = null,
        public ?\Carbon\Carbon $toDate = null,
        public ?string $fromCurrency = null,
        public ?string $toCurrency = null,
        public ?string $rateType = null,
    ) {}
}
