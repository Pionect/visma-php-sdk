<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory
 */
class PaymentReferenceInCashSaleUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
