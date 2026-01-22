<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items.
 * Mandatory field: Expense account* &gt; The default expense account
 * to be used for this non-stock item.
 */
class ExpenseAccountInInventoryAccountInformationDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
