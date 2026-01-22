<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A brief description of the inventory issue or its transactions.
 */
class DescriptionInInventoryAdjustmentUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
