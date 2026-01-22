<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A check box that you select to give the receipt the On Hold status. Clear the check box to save
 * the receipt with the Balanced status.
 */
class HoldInInventoryReceiptUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
