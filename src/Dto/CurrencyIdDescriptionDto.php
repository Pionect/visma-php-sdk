<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyIdDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyIdDescriptionDtoFactory factory()
 */
class CurrencyIdDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
