<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Customer or GLN is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatRegistrationIdInSalesOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatRegistrationIdInSalesOrderBasicUpdateDtoFactory factory()
 */
class VatRegistrationIdInSalesOrderBasicUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
