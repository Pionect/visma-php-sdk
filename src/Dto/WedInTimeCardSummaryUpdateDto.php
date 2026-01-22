<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Wednesday, including overtime.
 */
class WedInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
