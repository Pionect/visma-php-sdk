<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * To currency id.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ToCurrencyIdInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ToCurrencyIdInCreateCurrencyRateDtoFactory testFactory()
 */
class ToCurrencyIdInCreateCurrencyRateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
