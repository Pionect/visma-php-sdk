<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Thursday, including overtime.
 */
class ThuInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
