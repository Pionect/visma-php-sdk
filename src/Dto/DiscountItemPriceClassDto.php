<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountItemPriceClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountItemPriceClassDtoFactory factory()
 */
class DiscountItemPriceClassDto extends Model
{
    public function __construct(
        public ?string $priceClassId = null,
    ) {}
}
