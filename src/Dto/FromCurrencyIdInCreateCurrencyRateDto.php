<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * From currency id.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FromCurrencyIdInCreateCurrencyRateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FromCurrencyIdInCreateCurrencyRateDtoFactory factory()
 */
class FromCurrencyIdInCreateCurrencyRateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
