<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Tuesday, including overtime.
 */
class TueInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
