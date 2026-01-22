<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Warehouse defaults section &gt; Default receipt to &gt; The location of
 * warehouse to be used by default to receive certain quantities of the specified stock item.
 */
class DefaultReceiptToInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
