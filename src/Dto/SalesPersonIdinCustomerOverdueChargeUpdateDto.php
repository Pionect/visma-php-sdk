<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The field is deprecated for customer document endpoints, please use Salesperson instead
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonIdinCustomerOverdueChargeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonIdinCustomerOverdueChargeUpdateDtoFactory factory()
 */
class SalesPersonIdinCustomerOverdueChargeUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
