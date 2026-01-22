<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The property is now considered obsolete. Please define ItemType on the item level instead.
 */
class ItemTypeInCustomerInvoiceLinesUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
