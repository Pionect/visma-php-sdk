<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items.
 * Purchase accrual account &gt; Purchase order accrual account &gt;
 * The liability account to be used for this stock item to accrue amounts on purchase orders related to
 * this item.
 */
class ExpenseAccrualAccountInInventoryAccountInformationDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
