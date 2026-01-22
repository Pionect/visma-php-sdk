<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The project task that the employee worked on.
 */
class ProjectTaskInTimeCardSummaryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
