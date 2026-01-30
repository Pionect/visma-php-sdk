<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyRateTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyRateTypeDtoFactory factory()
 */
class CurrencyRateTypeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?int $daysEffective = null,
    ) {}
}
