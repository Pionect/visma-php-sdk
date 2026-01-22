<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if GLN or VatRegistrationId is not specified.
 */
class SupplierInPurchaseOrderBasicUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
