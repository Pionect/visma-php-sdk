<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency rate type id.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IdInCreateCurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IdInCreateCurrencyRateTypeDtoFactory testFactory()
 */
class IdInCreateCurrencyRateTypeDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
