<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountItemDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountItemDtoFactory testFactory()
 */
class DiscountItemDto extends Model
{
    public function __construct(
        public ?string $itemId = null,
    ) {}
}
