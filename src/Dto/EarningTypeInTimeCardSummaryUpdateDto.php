<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The type of the work time spent by the employee
 */
class EarningTypeInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
