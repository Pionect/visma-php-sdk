<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Friday, including overtime.
 */
class FriInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
