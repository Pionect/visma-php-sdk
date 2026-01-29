<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCustomerPriceClassDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCustomerPriceClassDtoFactory factory()
 */
class DiscountCustomerPriceClassDto extends Model
{
    #[Property]
    public ?string $priceClassId;
}
