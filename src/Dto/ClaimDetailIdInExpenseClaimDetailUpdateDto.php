<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Identifies the expense claim detail line to update
 */
class ClaimDetailIdInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
