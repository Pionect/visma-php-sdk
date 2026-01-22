<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Allocation rule &gt; The default
 * allocation rule that is used for the tasks created for the project.
 */
class AllocationRuleInProjectDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
