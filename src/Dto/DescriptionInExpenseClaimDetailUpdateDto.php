<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A description of the transaction.
 */
class DescriptionInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
