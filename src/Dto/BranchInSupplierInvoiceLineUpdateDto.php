<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch is deprecated, please use BranchNumber instead.
 */
class BranchInSupplierInvoiceLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
