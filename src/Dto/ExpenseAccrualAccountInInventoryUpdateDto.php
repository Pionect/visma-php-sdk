<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Non-stock items
 */
class ExpenseAccrualAccountInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
