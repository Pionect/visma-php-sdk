<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCustomer2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCustomer2dtoFactory testFactory()
 */
class DiscountCustomer2dto extends Model
{
    public function __construct(
        public ?string $customer = null,
    ) {}
}
