<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference number for the document. Can be used when manual numbering is enabled.
 */
class TypeInSupplierPaymentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
