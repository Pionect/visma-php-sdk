<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The field is deprecated for customer document endpoints, please use Salesperson instead
 */
class SalesPersonIdinCustomerInvoiceUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
