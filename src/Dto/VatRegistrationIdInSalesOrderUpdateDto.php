<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Customer or GLN is not specified.
 */
class VatRegistrationIdInSalesOrderUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
