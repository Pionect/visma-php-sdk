<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The description of the reported work hours.
 */
class DescriptionInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
