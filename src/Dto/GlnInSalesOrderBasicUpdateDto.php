<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Customer or VatRegistrationId is not specified.
 */
class GlnInSalesOrderBasicUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
