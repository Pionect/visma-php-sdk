<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCustomerPriceClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCustomerPriceClassDtoFactory factory()
 */
class DiscountCustomerPriceClassDto extends Model
{
    public function __construct(
        public ?string $priceClassId = null,
    ) {}
}
