<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if GLN or VatRegistrationId is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInSalesOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInSalesOrderUpdateDtoFactory factory()
 */
class CustomerInSalesOrderUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
