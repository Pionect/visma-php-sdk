<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Monday, including overtime.
 */
class MonInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
