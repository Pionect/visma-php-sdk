<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Project task &gt; The project task that the employee worked on.
 */
class ProjectTaskInTimeCardSummaryDto extends Model
{
    /** The internal identifier. */
    #[Property]
    public ?int $internalId;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
