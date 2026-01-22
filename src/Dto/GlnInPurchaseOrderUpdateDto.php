<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Supplier or VatRegistrationId is not specified.
 */
class GlnInPurchaseOrderUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
