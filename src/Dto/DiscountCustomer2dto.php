<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCustomer2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCustomer2dtoFactory factory()
 */
class DiscountCustomer2dto extends Model
{
    #[Property]
    public ?string $customer;
}
