<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxNumberDescriptionDtoFactory testFactory()
 */
class TaxNumberDescriptionDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
