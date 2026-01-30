<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCodeNumberDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeNumberDescriptionDtoFactory testFactory()
 */
class DiscountCodeNumberDescriptionDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
